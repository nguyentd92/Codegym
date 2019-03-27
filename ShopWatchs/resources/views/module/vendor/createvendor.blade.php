@extends('layouts.app')

@section('content')
<div class="container">
    <form method="post" action="{{ route('manage.storevendor')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Vendor's Name</label>
            <input type="text" class="form-control" name='name' placeholder="name">
        </div>
        <div class="form-group">
            <label for="phone">Vendor's Phone</label>
            <input type="text" class="form-control" name='phone' placeholder="phone">
        </div>
        <div class="form-group">
            <label for="address">Vendor's Address</label>
            <input type="text" class="form-control" name='address' placeholder="address">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" cols="30" rows="8" placeholder="description"></textarea>
        </div>
        <div class="form-group">
            <label for="email">Vendor's Email</label>
            <input type="email" class="form-control" name='email' placeholder="email">
        </div>
        <div class="form-group">
            <label for="Country"></label>
            <select name="nation_code" class="form-control">
                <option>Choose vendor's country</option>
                @foreach($nations as $nation)
                    <option value={{ $nation->code }}>{{$nation->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="promotion">Promotion:</label>

        </div>
        <div class="form-group">
            <label for="image">File</label>
            <input type="file" class="form-control-file" id="image" name="image"/>
        </div>


        <input type="text" name="_method" value="put" hidden>
        <button type="submit" class="btn btn-primary">Accept to store</button>
    </form>
</div>

@endsection