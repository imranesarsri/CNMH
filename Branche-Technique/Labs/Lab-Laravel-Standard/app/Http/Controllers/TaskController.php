<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;
use App\Http\Requests\FormTaskRequest;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
    // Instance of the TaskRepository to handle database operations related to tasks
    protected $taskRepository;

    /**
     * Constructor to inject the TaskRepository instance into the controller.
     *
     * @param TaskRepository $taskRepository
     */
    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    /**
     * Display a listing of tasks with pagination and associated projects.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $task = $request->route('task');
        // dd($task);
        // Fetch all projects to be used for filtering
        $projectsFilter = Project::all();
        // Retrieve paginated tasks with associated projects using the TaskRepository
        if ($task) {
            $tasks = $this->taskRepository->index()->where('project_id', $task)->with('project')->paginate(5);
        } else {
            $tasks = $this->taskRepository->index()->with('project')->paginate(5);
        }
        // Check if the request is an AJAX request

        if ($request->ajax()) {
            // Handle AJAX request and return rendered view
            return $this->handleAjaxRequest($request, $tasks, $projectsFilter);
        }

        return view('Tasks.index', compact('tasks', 'projectsFilter', 'task'));
    }

    // ========= handle Ajax Request  =========
    private function handleAjaxRequest(Request $request, $tasks, $projectsFilter)
    {
        // Get the project query from the repository
        $query = $this->taskRepository->index();

        // Get search and filter values from the request
        $searchTerm = str_replace(' ', '%', $request->get('searchTaskValue'));
        $filterValue = $request->get('selectProjrctValue');

        // Check if the view should display search results
        if ($this->shouldReturnSearchView($searchTerm, $filterValue)) {
            // Return rendered search view
            return view('Tasks.search', compact('tasks', 'projectsFilter'))->render();
        }

        // Apply search if search term is present
        if ($searchTerm) {
            $tasks = $this->applySearch($query, $searchTerm);
        }

        // Apply filter if filter value is not "Tout le projet"
        if ($filterValue !== "Tout le projet") {
            $tasks = $this->applyFilter($query, $filterValue);
        }

        // Return rendered search view or updated projects view
        return view('Tasks.search', compact('tasks', 'projectsFilter'))->render();
    }

    private function shouldReturnSearchView($searchTerm, $filterValue)
    {
        return empty($searchTerm) && $filterValue === "Tout le projet";
    }

    // Private method to apply search to the project query
    private function applySearch($query, $searchTerm)
    {
        return $query->with('project')->where('name', 'like', '%' . $searchTerm . '%')->paginate(5);
    }

    // Private method to apply filter to the project query
    private function applyFilter($query, $filterValue)
    {
        return $query->with('project')->where('project_id', $filterValue)->paginate(5);
    }

    // ========================================

    /**
     * Show the form for creating a new task.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        // Fetch all projects to be used for task creation
        $projects = Project::all();

        return view('Tasks.create', compact('projects'));
    }

    /**
     * Store a newly created task in the database.
     *
     * @param FormTaskRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FormTaskRequest $request)
    {
        // Store the validated data for a new task using the TaskRepository
        $this->taskRepository->store($request->validated());

        // Redirect to the task index page with a success message
        return redirect()->route('task.index')->with('success', 'Tâche créée avec succès !');
    }

    /**
     * Show the form for editing the specified task.
     *
     * @param Task $task
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Task $task)
    {
        // Fetch all projects to be used for task editing
        $projects = Project::all();

        return view('Tasks.edit', compact('task', 'projects'));
    }

    /**
     * Display the specified task.
     *
     * @param Task $task
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Task $task)
    {
        return view('Tasks.show', compact('task'));
    }

    /**
     * Update the specified task in the database.
     *
     * @param FormTaskRequest $request
     * @param Task $task
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(FormTaskRequest $request, Task $task)
    {
        // Update the task with validated data using the TaskRepository
        $this->taskRepository->update($request->validated(), $task);

        // Redirect to the task index page with a success message
        return redirect()->route('task.index')->with('success', 'Tâche mise à jour avec succès !');
    }

    /**
     * Remove the specified task from the database.
     *
     * @param Task $task
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Task $task)
    {
        // Delete the task using the TaskRepository
        $this->taskRepository->destroy($task);

        // Redirect to the task index page with a success message
        return redirect()->route('task.index')->with('success', 'Tâche supprimée avec succès !');
    }
}