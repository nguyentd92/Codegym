@extends('layouts.tasklayout')
@section('content')
        <div class="content">
            <div class="title m-b-md">
                Tasks List
            </div>

            @if(!isset($tasks))
            <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
            @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Task title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Created</th>
                        <th scope="col">Due Date</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @if(count($tasks) == 0)
                    <tr>
                        <td colspan="5">
                            <h5 class="text-primary">Hiện tại chưa có task nào được tạo!</h5>
                        </td>
                    </tr>
                    @else
                    @foreach($tasks as $key => $task)
                    <tr>
                        <td scope="row">{{ ++$key }}</td>
                        <td>{{ str_limit($task->title, 80) }}</td>
                        <td>{{ str_limit($task->content,150) }}</td>
                        <td>{{ $task->created_at }}</td>
                        <td>{{ $task->duedate }}</td>
                        <td><a href="{{route('tasks.edit', $task->id)}}" class="btn btn-primary">Edit</a></td>
                        <td><form method='post' action= "{{ $task->id }}/destroy">  
                            @csrf                          
                            <input class="btn btn-danger" type='submit' name='_method' value='delete' onclick="return confirm('Are you sure?')"/>
                        </form>
                    </tr>
                    @endforeach
                    @endif
                </tbody>

            </table>
            @endif

        </div>
@endsection