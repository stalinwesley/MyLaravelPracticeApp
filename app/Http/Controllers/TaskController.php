<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function show()
    {
        $tasks1 = Task::all();
        return view('tasks.index',compact('tasks1'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]); 
        $task = new Task;
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();
        return redirect()->route('task.index');
    }
    
    public function edit(Task $task)
    {
        return view('tasks.edit',compact('task'));
    }

    public function update(Request $request,Task $task)
    {
        $task->title = $request->title ?? $task->title;
        $task->description = $request->description ?? $task->description;
        $task->save();
        return redirect()->route('task.index');
    }

    public function delete(Task $task)
    {
        $task->delete();
        return redirect()->route('task.index');
    }

}
