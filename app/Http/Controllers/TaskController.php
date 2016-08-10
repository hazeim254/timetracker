<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    protected $rules = ['project_id' => 'required', 'activity_id' => 'required', 'done_at' => 'required', 'hours' => 'required', 'minutes' => 'required'];

    public function index()
    {
        $tasks = Task::paginate();

        return view('task.index', compact('tasks'));
    }

    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {
        $this->validates($request, 'Could not save task');

        $task = new Task($request->all());
        $task->user_id = \Auth::id();
        $task->save();

        flash('Task has been saved', 'success');

        return \Redirect::route('task.index');
    }

    public function show(Task $task)
    {
        return view('task.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('task.edit', compact('task'));
    }

    public function update(Task $task, Request $request)
    {
        $this->validates($request, 'Could not save task');

        $task->update($request->all());

        flash('Task has been saved', 'success');

        return \Redirect::route('task.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        flash('Task has been deleted', 'success');

        return \Redirect::route('task.index');
    }
}
