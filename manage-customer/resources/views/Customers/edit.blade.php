@extends('home')
@section('title', 'Thêm mới khách hàng')

@section('content')
<div class="col-12 col-md-12">
   <div class="row">
      <div class="col-12">
          <h1>Thêm mới khách hàng</h1>
      </div>
      <div class="col-12">
         <form method="post" action="{{ route('customers.store') }}">
         @csrf
         <div class="form-group">
            <label>Tên khách hàng</label>
            <input type="text" class="form-control" name="name"  placeholder="Enter name" required>
         </div>
         <div class="form-group">
             <label for="exampleInputEmail1">Email</label>
             <input type="email" class="form-control" name="email" placeholder="Enter email" required>
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Ngày sinh</label>
            <input type="date" class="form-control" name="dob" required>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
         </form>
       </div>
     </div>
   </div>
@endsection 
Nội dung view edit.blade.php

@extends('home')
@section('title', 'Chỉnh sửa khách hàng')
@section('content')
<div class="col-12 col-md-12">
   <div class="row">
      <div class="col-12"><h1>Chỉnh sửa khách hàng</h1></div>
      <div class="col-12">
         <form method="post" action="{{ route('customers.update', $customer->id) }}">
         @csrf
         <div class="form-group">
         <label>Tên khách hàng</label>
         <input type="text" class="form-control" name="name" value="{{ $customer->name }}" required>
         </div>
         <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{ $customer->email }}" required></div>
         <div class="form-group">
            <label>Ngày sinh</label>
            <input type="date" class="form-control" name="dob" value="{{ $customer->dob }}" required>
         </div>
         <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
         <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
      </form>
      </div>
     </div>
</div>
@endsection