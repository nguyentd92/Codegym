@extends('layouts.tasklayout')
@section('content')

     <div class="content">
         <div class="title m-b-md">
             Add new Task
         </div>
         <form class="text-left" method='post' action='{{ route('tasks.update', $task->id)}}' enctype="multipart/form-data">
         @csrf
             <div class="form-group">
                 <label for="inputTitle">Task title</label>
                 <input type="text"
                        class="form-control"
                        id="inputTitle"
                        name="inputTitle"
                        value="{{ $task->title }}"
                        required>
             </div>
             <div class="form-group">
                 <label for="inputContent">Task content</label>
                 <textarea class="form-control"
                           id="inputContent"
                           name="inputContent"
                           rows="6"
                           required>{{ $task->content }}</textarea>
             </div>
             <div class="form-group">
                 <label for="inputDueDate">Due Date</label>
                 <input type="date"
                        class="form-control"
                        id="inputDueDate"
                        name="inputDueDate"
                        value="{{ $task->duedate }}"
                        required>
             </div>
             <div class="form-group">
                 <label for="inputFile">File</label>
                 Current: 
                 <img src="storage/{{ $task->image }}" alt="{{ $task->image }}">
                 <span> {{ $task->image }}</span>
                 <input type="file"
                        class="form-control-file"
                        id="inputFile"
                        name="inputFile">
             </div>
             <input type="text" name="_method" id="" value="put" hidden>
             <button type="submit" class="btn btn-primary">Submit</button>
         </form>
         <hr>
         <a href="{{ route('tasks.index') }}">< Back</a>
     </div>
     @endsection