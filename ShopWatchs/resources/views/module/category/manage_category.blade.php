@extends('layouts.module.managercategory')

@section('show')
    <div class="container">
        <div><h3>Category's Manager</h3></div>
        <div>
            <div><a href="{{route('manage.category.create')}}">Create new</a></div>
            <div><a href="{{route('manage.category.list')}}">List</a></div>
        </div>
    </div>
@endsection