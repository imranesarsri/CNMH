<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class taskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Tasks = Task::all();
        return view('task.index', compact('Tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task.create');
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
        Task::create($request->only($this->columns));

        return redirect('task');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd(Task::find($id));
        $Task = Task::find($id);
        return view('task/edit', compact('Task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->only($this->columns));
        Task::where('id', $id)->update($request->only($this->columns));
        return redirect('task');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}