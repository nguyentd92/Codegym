@extends('layouts.tasklayout')
@section('content')

     <div class="content">
         <div class="title m-b-md">
             Add new Task
         </div>
         <form class="text-left" method='post' action='{{ route('tasks.store')}}' enctype="multipart/form-data">
         @csrf
             <div class="form-group">
                 <label for="inputTitle">Task title</label>
                 <input type="text"
                        class="form-control"
                        id="inputTitle"
                        name="inputTitle"
                        required>
                        @if ($errors->has('inputTitle'))
                        <span style="color: red">{{ $errors->first('inputTitle')  }}</span>
                        @endif
             </div>

             
             <div class="form-group">
                 <label for="inputContent">Task content</label>
                 <textarea class="form-control"
                           id="inputContent"
                           name="inputContent"
                           rows="3"
                           required></textarea>
                           @if ($errors->has('inputContent'))
                          <span style="color: red">{{ $errors->first('inputContent')  }}</span>                               

                           @endif
             </div>
             <div class="form-group">
                 <label for="inputDueDate">Due Date</label>
                 <input type="date"
                        class="form-control"
                        id="inputDueDate"
                        name="inputDueDate"
                        required>
                        @if ($errors->has('inputDueDate'))
                        <span style="color: red">{{ $errors->first('inputDueDate')  }}</span>                               

                         @endif
             </div>
             <div class="form-group">
                 <label for="inputFile">File</label>
                 <input type="file"
                        class="form-control-file"
                        id="inputFile"
                        name="inputFile">
                        @if ($errors->has('inputFile'))
                        <span style="color: red">{{ $errors->first('inputFile')  }}</span>                               

                         @endif
             </div>
             <input type="text" name="_method" id="" value="put" hidden>
             <button type="submit" class="btn btn-primary">Submit</button>
         </form>
         <hr>
         <a href="{{ route('tasks.index') }}">< Back</a>
     </div>
     @endsection