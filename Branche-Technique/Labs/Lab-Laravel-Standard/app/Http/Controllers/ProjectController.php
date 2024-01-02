<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Repositories\ProjectRepository;

class ProjectController extends Controller
{
    // Instance of the ProjectRepository
    protected $projectRepository;

    // Constructor to inject the ProjectRepository
    public function __construct(ProjectRepository $ProjectRepository)
    {
        $this->projectRepository = $ProjectRepository;
    }

    // Index method to display projects
    public function index(Request $request)
    {
        // Retrieve project data for filtering
        $projectsFilter = $this->projectRepository->getData()->select('id', 'name')->get();

        // Retrieve paginated project data
        $projects = $this->projectRepository->index()->paginate(5);

        // Check if the request is an AJAX request
        if ($request->ajax()) {
            // Handle AJAX request and return rendered view
            return $this->handleAjaxRequest($request, $projects, $projectsFilter);
        }

        // Return the main index view with projects and filter data
        return view('Projects.index', compact('projects', 'projectsFilter'));
    }

    // Private method to handle AJAX requests
    private function handleAjaxRequest(Request $request, $projects, $projectsFilter)
    {
        // Get the project query from the repository
        $query = $this->projectRepository->index();

        // Get search and filter values from the request
        $searchTerm = str_replace(' ', '%', $request->get('searchTaskValue'));
        $filterValue = $request->get('selectProjrctValue');

        // Check if the view should display search results
        if ($this->shouldReturnSearchView($searchTerm, $filterValue)) {
            // Return rendered search view
            return view('Projects.search', compact('projects', 'projectsFilter'))->render();
        }

        // Apply search if search term is present
        if ($searchTerm) {
            $projects = $this->applySearch($query, $searchTerm);
        }

        // Apply filter if filter value is not "Tout le projet"
        if ($filterValue !== "Tout le projet") {
            $projects = $this->applyFilter($query, $filterValue);
        }

        // Return rendered search view or updated projects view
        return view('Projects.search', compact('projects', 'projectsFilter'))->render();
    }

    // Private method to check if the search view should be returned
    private function shouldReturnSearchView($searchTerm, $filterValue)
    {
        return empty($searchTerm) && $filterValue === "Tout le projet";
    }

    // Private method to apply search to the project query
    private function applySearch($query, $searchTerm)
    {
        return $query->where('name', 'like', '%' . $searchTerm . '%')->paginate(5);
    }

    // Private method to apply filter to the project query
    private function applyFilter($query, $filterValue)
    {
        return $query->where('name', 'like', '%' . $filterValue . '%')->paginate(5);
    }

    /**
     * Display the specified task.
     *
     * @param Project $project
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Project $project)
    {
        return view('Projects.show', compact('project'));
    }

}