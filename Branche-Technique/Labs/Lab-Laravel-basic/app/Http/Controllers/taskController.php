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
        $Tasks = Task::paginate(5);
        return view('Tasks.index', compact('Tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Projects = Project::all();
        return view('Tasks.create', compact('Projects'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormTaskRequest $request)
    {
        Task::create($request->validated());
        return redirect('/')->with('success', 'Tâche créée avec succès !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $id)
    {
        dd($id);
        $Task = Task::find($id);
        $Projects = Project::all();
        return view('Tasks.edit', compact('Task', 'Projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormTaskRequest $request, string $id)
    {
        // dd($Validation);
        Task::where('id', $id)->update($request->validated());
        return redirect('/')->with('success', 'Tâche créée avec succès !');
        // dd($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Task::where('id', $id)->delete();
        return redirect('/');

    }
}