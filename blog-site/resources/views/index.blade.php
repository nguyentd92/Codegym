@extends('layouts.master')
@section('title', 'Welcome')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Laravel Session
        </div>

        <div class="links">
            <a href="{{ route('login.form') }}">
                <button type="button" class="btn btn-outline-primary">Đăng Nhập</button>
            </a>
        </div>
    </div>

</div>
@endsection