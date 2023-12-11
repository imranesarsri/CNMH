<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;

class taskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Tasks = Task::paginate(3);
        return view('task.index', compact('Tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Projects = Project::all();
        return view('task.create', compact('Projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    private $columns = ['taskName', 'projectName', 'description'];
    public function store(Request $request)
    {

        // dd($request->taskName, $request->projectName, $request->description);
        // Task::create([
        //     'taskName' => $request->taskName,
        //     'projectName' => $request->projectName,
        //     'description' => $request->description,
        // ]);
        // Task::create($request->only('taskName', 'projectName', 'description'));
        // $request->validate([
        // $Task = 'taskName' => 'required|string|max:50',
        // 'projectName' => 'required',
        // 'description' => 'required',
        // ]);
        // Task::create($Task);

        $data = $request->validate([
            'taskName' => 'required|string|max:50',
            'projectName' => 'required',
            'description' => 'required',
        ]);
        // dd($data);
        Task::create($data);
        return redirect('task');

    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     $Task = Task::find($id);
    //     return view('task.show', compact('Task'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd(Task::find($id));
        $Task = Task::find($id);
        $Projects = Project::all();
        return view('task.edit', compact('Task', 'Projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->only($this->columns));
        $data = $request->validate([
            'taskName' => 'required|string|max:50',
            'projectName' => 'required',
            'description' => 'required',
        ]);
        // dd($data);
        Task::where('id', $id)->update($data);
        return redirect('task');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Task = Task::find($id);
        $Task->delete();
        // Task::where('id', $id)->delete();

        return redirect('task');
    }
}