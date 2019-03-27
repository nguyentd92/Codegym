@extends('layouts.module.managerproduct')

@section('show')
    <div class="container">
        <div><h3>Product's Manager</h3></div>
        <div>
            <div><a href="{{route('manage.product.create')}}">Create new</a></div>
            <div><a href="{{route('manage.product.list')}}">List</a></div>
        </div>
    </div>
@endsection