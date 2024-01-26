<?php

namespace App\Http\Controllers\Backend;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function index()
    {
        $task_all = Task::latest('id')
            ->where('status', 'pending')
            ->get();
        return view('backend.pages.tasks.index', compact('task_all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|max:200',
            'due_date' => 'required|date',
            'status' => 'required|in:completed,pending', // Add validation rule for 'status'
        ]);

        // Create New Tasks
        $creste_task = new Task();
        $creste_task->title = $request->title;
        $creste_task->description = $request->description;
        $creste_task->due_date = $request->due_date;
        $creste_task->status = $request->status;
        $creste_task->save();
        session()->flash('success', 'Task has been created !!');
        return redirect()->route('admin.tasks.index');
    }

    public function updateStatus(Request $request, Task $task)
    {
        $request->validate([
            'status' => 'required|in:completed,pending',
        ]);

        $task->status = $request->status;
        $task->save();
        session()->flash('success', 'Task status updated successfully!!');
        return redirect()->route('admin.tasks.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editTask = Task::find($id);
        return view('backend.pages.tasks.edit', compact('editTask'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'string|max:100',
            'description' => 'string|max:200',
            // Add validation rule for 'status'
        ]);
        $editTask = Task::find($id);
        $editTask->title = $request->title;
        $editTask->description = $request->description;
        $editTask->due_date = $request->due_date;
        $editTask->status = $request->status;
        $editTask->save();
        session()->flash('success', 'Task has been updated !!');
        return redirect()->route('admin.tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        if (!is_null($task)) {
            $task->delete();
        }

        session()->flash('success', 'Task has been deleted !!');
        return back();
    }
}