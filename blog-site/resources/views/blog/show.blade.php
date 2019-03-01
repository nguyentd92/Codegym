@extends('layouts.blog')
@section('title-ftn', $blog->title)
@section('content')
@if (!isset($blog)) Không có thông tin
@else 
    <div class="content">
        <div class="form-group">
            <H1>{{ $blog->title }}</H1><br/>
            <span>{{ $blog->category }}</span>
        </div>

        <div class="form-group">
            <p>{{ $blog->content }}</p>
        </div>

    </div>
    <hr>
@endif
@endsection