@extends('layouts.manager')

@section('title', 'Stocks')

@section('content')
    <div class="row justify-content-center">
        <a class="navbar-brand" href="{{ route('manage.stock.manager') }}">Stocks</a>
        <a class="nav-item nav-link" href="{{ route('manage.stock.create') }}">Add</a>
        <a class="nav-item nav-link" href="{{ route('manage.stock.alllist') }}">All stocks list</a>
        <a class="nav-item nav-link" href="{{ route('manage.stock.activelist') }}">Active stocks list</a>
        <a class="nav-item nav-link" href="{{ route('manage.stock.outstocklist') }}">Out stocks list</a>
    </div>
    <div class="row">
        @yield('show')
    </div>

@endsection


