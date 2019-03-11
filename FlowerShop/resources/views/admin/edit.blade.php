@extends('layouts.admin')

@section('section')
<div class="container">
  <form method="post" action="{{ route('admin.update', $product->id)}}" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="name">Price</label>
            <input type="text" class="form-control" name='name' placeholder="name" value={{ $product->name}}>
        </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" cols="30" rows="10" placeholder="description">{{ $product->description }}</textarea>          
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control" name='price' placeholder="price" value={{ $product->price}}>
      </div>
      <div>
        <label for="promotion">Promotion:</label>
        @foreach($promotions as $promotion)
            @if (in_array($promotion->id, $product_promotions))
            <br/><input type="checkbox" name="promotion[]" value="{{ $promotion->id }}" checked/> {{ $promotion->description }} 
            @else
            <br/><input type="checkbox" name="promotion[]" value="{{ $promotion->id }}"/> {{ $promotion->description }} 
            @endif
        @endforeach
      </div>
      <div class="form-group">
          <label for="image">File</label>
          <input type="file" class="form-control-file" id="image" name="image"/>
      </div>

      <input type="text" name="_method" value="put" hidden>
      <button type="submit" class="btn btn-primary">Update product</button>
  </form>
</div>
@endsection