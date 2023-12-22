<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;
use App\Http\Requests\FormTaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Tasks = Task::paginate(4);
        return view('Tasks/index', compact('Tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Projects = Project::all();
        return view('Tasks/create', compact('Projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormTaskRequest $request)
    {
        // dd($request);
        Task::create($request->validated());
        return redirect('/')->with('success', 'Tâche créée avec succès !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $Projects = Project::all();
        return view('Tasks.edit', compact('task', 'Projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormTaskRequest $request, Task $task)
    {
        $task->update($request->validated());
        return redirect('/')->with('success', 'Tâche update avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/')->with('success', 'Tâche delete avec succès !');
    }

    // search by ajax

    // public function ajax_search(Request $request)
    // {
    //     dd($request);
    //     if ($request->ajax()) {
    //         $result = $request->table_search;
    //         $data = Task::where('name', 'like', "%{$result}$")->orderby("id", "ASC")->paginate(4);
    //         return view('Tasks.search', compact('data'));
    //     }
    // }

    public function searchTask(Request $request)
    {
        $Search = $request->input('search');

        // Check if the search value is empty
        if (empty($Search)) {
            $Tasks = Task::paginate(4);
        } else {
            $Tasks = Task::where('name', 'like', '%' . $Search . '%')->paginate(4);
        }

        // Controller code
        if ($request->ajax()) {
            return response()->json([
                'table' => view('Tasks.table', compact('Tasks'))->render(),
                'pagination' => $Tasks->links()->toHtml(),
            ]);
        }

    }
}
