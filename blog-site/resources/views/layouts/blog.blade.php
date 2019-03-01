@extends('layouts.master')
@section('title', 'Blog')
@section('header')
<H2> 
Blogs Management / @yield('title-ftn')
</H2>
@endsection
@section('menu')
<div>
    <a href="{{ route('blog.index')}}">Home</a> |
    <a href="{{ route('blog.list')}}">List</a> |
    <a href="{{ route('blog.add')}}">Add</a> |
    <a href="{{ route('blog.modify')}}">Modify</a>
</div>
@endsection

@section('content')
    @yield('content')
@endsection
