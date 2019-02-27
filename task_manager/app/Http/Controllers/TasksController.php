<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;
use Session;

class TasksController extends Controller
{
    public function index() {

    //Lấy ra toàn bộ các task từ database thông qua truy vấn bằng Eloquent
    $tasks = Task::all();
        
    // Trả về view index và truyền biến tasks chứa danh sách các task
    return view('index', compact('tasks'));

    }

    public function create() {
        return view('add');
    }

    public function store(Request $request) {
        $task = new Task;
        $task->setTask($request);
        $message = "Tạo Task $request->inputTitle thành công!";
        Session::flash('create-success', $message);
    
        return redirect()->route('tasks.index', compact('message'));
    }
    
    public function show($taskId) {}

    public function edit($taskId) {}

    public function update($taskId) {}

    public function destroy($photo) {}
}
