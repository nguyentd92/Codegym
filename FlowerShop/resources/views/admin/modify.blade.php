@extends('layouts.admin')

@section('section')
<div class="container">
    <nav class="nav justify-content-center">
        {{ $products->links() }}
    </nav>
    <table class="table striped">
        <thead>
            <tr>
                <th></th>
                <th>Product</th>
                <th>Image</th>
                <th>Description</th>
                <th>Price</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $key => $product)
            <tr>
                <td scope="row">{{++$key}}</td>
                <td>{{$product->id}}</td>
                <td>{{ str_limit($product->image,30) }}</td>
                <td>{{ str_limit($product->description, 40)}}</td>
                <td>{{$product->price}}</td>
                <td><a class="btn btn-primary" href="{{ route('admin.edit', $product->id)}}">Edit</a></td>
                <td><a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa {{$product->id}}: {{$product->name}}')" href="{{ route('admin.destroy', $product->id)}}">Delete</a></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</div>
@endsection