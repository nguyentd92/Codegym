@extends('layouts.blog')
@section('title-ftn', 'List')
@section('content')
        <div class="content">
            @if(!isset($blogs))
            <h5 class="text-primary">Dữ liệu không tồn tại!</h5>
            @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Category</th>
                        <th scope="col">Created</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @if(count($blogs) == 0)
                    <tr>
                        <td colspan="5">
                            <h5 class="text-primary">Hiện tại chưa có task nào được tạo!</h5>
                        </td>
                    </tr>
                    @else
                    @foreach($blogs as $key => $blog)
                    <tr>
                        <td scope="row">{{ ++$key }}</td>
                        <td><a href="{{route('blog.show', $blog->id)}}"" >{{ $blog->title }}</a></td>
                        <td>{{ $blog->content }}</td>
                        <td>{{ $blog->category }}</td>
                        <td>{{ $blog->created_ad }}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>

            </table>
            <div class="col-6">
                <div class="pagination float-right">
                    {{ $blogs->appends(request()->query()) }}
                </div>
            </div>
            @endif

        </div>
@endsection

