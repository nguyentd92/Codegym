@extends('layouts.blog')
@section('title-ftn', 'Modify')
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
                <th scope="col">Category</th>
                <th scope="col"></th>
                <th scope="col"></th>
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
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->content }}</td>
                <td><a href="{{ route('blog.edit', $blog->id) }}">Edit</a></td>
                <td><a href="{{ route('blog.delete', $blog->id) }}">Delete</a></td>
            </tr>
            @endforeach
            @endif
        </tbody>

    </table>
    @endif

</div>
@endsection