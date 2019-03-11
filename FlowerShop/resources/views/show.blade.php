@extends('layouts.shoplayout')

@section('section')
<div class="container">
  
  <div>
      <h3>{{$product->name}}</h3>
      Product ID: {{ $product->id }}
      <div class='row'>
          <div class="col-md-6">
              <img src="{{ asset('storage/' . $product->image) }}" alt="" style="height: 500px; width:auto">
          </div>
          <div class="col-md-6">      
              <p><strong>Description:</strong> <br/>{{ $product->description }}</p>
              <strong>Price: </strong> {{ $product->price }}<br/>
              <strong>Last Price:</strong>  <del>{{ $product->lastPrice }}</del><br/>
              <strong>Promotion:</strong>
              <p style="color: red">
              @foreach($product->promotions as $k => $promotion) 
                  {{ $k+1 }}. {{ $promotion->description }} <br/>
              @endforeach
              </p>  
              
              <button class="btn btn-success" onclick="window.location.href='{{ route('index',['productid'=>$product->id])}}'">Add to Cart</button>
              <button class="btn" onclick="window.location.href='{{ route('index')}}'">Back to Shop</button>
            </div>          
        </div>
      </div>      
  </div>


@endsection