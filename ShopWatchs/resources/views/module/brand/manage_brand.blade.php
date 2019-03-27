@extends('layouts.manager')

@section('content')
    <div class="container">
        <div><h3>Vendor's Manager</h3></div>
        <div>
            <div><a href="{{route('manage.createvendor')}}">Create new</a></div>
            <div><a href="{{route('manage.listvendor')}}">List</a></div>
        </div>
    </div>
@endsection