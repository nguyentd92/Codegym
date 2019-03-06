<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskCreateRequest;
use Session;
use Storage;

class TasksController extends Controller
{
    public function index(Request $request) {

    $keyword = $request->get('keyword');
    
    if ($keyword) {
        $tasks = Task::where('title','like',"%$keyword%")->paginate(5);
    } else {
    $tasks = Task::paginate(5);
    }
    return view('index', compact('tasks'));

    }

    public function create() {
        return view('add');
    }

    public function store(TaskCreateRequest $request) {
        $task = new Task;

        $task->title = $request->inputTitle;
        $task->content = $request->inputContent;
        $task->duedate = $request->inputDueDate;
                $file = $request->inputFile;

        if ($request->hasFile('inputFile')) {
            $image = $request->file('inputFile');
            $path = $image->store('images','public');
            $task->image = $path;
        }

       $task->save();

        $message = "Tạo Task $request->inputTitle thành công!";
        Session::flash('create-success', $message);
    
        return redirect()->route('tasks.index');
    }
    
    public function modify() {
        $tasks = Task::all();
        return view('modify', compact(['tasks']));
    }
    public function show($taskId) {
        $task = Task::findOrFail($taskId);

        return view('show', compact('task'));
    }

    public function edit($taskId) {
        return view('edit', ['task' => Task::find($taskId)]);
    }

    public function update(TaskCreateRequest $request, $taskId) {
        $task = Task::findOrFail($taskId);

        $task->title = $request->input('inputTitle');
        $task->content = $request->input('inputContent');
        $task->duedate = $request->input('inputDueDate');   

        if ($request->hasFile('inputFile')) {

            $currentImg = $task->image;

            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }

            $image = $request->file('inputFile');

            $path = $image->store('images', 'public');

            $task->image = $path;
        }

        $task->save();

        return redirect()->route('tasks.modify');
    }

    public function destroy($taskId) {
        $task = Task::findOrFail($taskId);
        $task->delete();
        return redirect()->route('tasks.modify');
    }

}
