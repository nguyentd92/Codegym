@extends('layouts.tasklayout')
@section('content')

        <div class="content">
            <div class="title m-b-md">
                List
            </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#modelId">
                            Search
                          </button>
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
                        <td><a href="{{ route('tasks.show', $task->id) }}">{{ str_limit($task->title,150) }}</a></td>
                        <td>{{ str_limit($task->content,80) }}</td>
                        <td>{{ $task->created_at }}</td>
                        <td>{{ $task->duedate }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $task->image) }}" alt="" style="width: 150px">
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>

            </table>
            @endif
            {{ $tasks->links() }}
        </div>


            
            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tìm kiếm</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <form action="{{ route('tasks.index')  }}" method="get">
                            <div class="modal-body">
                                <input type="text" name="keyword" id="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection