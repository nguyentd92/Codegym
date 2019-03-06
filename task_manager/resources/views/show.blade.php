@extends('layouts.tasklayout')
@section('content')
    <div class="content">
        <h4>{{ $task->title }}</h4>

        <img style="width: 40%; height: auto;" src="{{asset('storage/'.$task->image) }}" alt="{{ $task->title }}" >

        <p>
            {{ $task->content}}
        </p>
    </div>
@endsection