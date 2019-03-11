@extends('layouts.shoplayout')

@section('section')
<div class="container">
    <table class="table border">
        <tbody>
          @foreach ($products as $key => $product)
              <div class="col-md-3">
                  <h5>{{ $product->name }}</h5>
                  <div><strong>ID:</strong> {{ $product-> id }}
                       <span class="badge badge-warning" onclick="window.location.href='{{route('index', ['categoryId' => $product->category_id])}}'">{{ $product->category->name }}</span>
                  </div> 
                  <img src="{{asset('storage/'.$product->image) }}" alt="" style="width: auto; height: 200px; text-align: center">                  
                  <div>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modelId{{$product->id}}">
                          {{ count($product->promotions) }} promotions
                        </button>
                      </div>
                  <button class='btn btn-primary btn-md' onclick="window.location.href='{{ route('show',$product->id)}}'">More</button><button class='btn btn-md btn-success' onclick="window.location.href='{{ route('index', ['productid'=> $product->id])}}'">Add to Cart</button>
                  <p>$ <strong style="color: blue">{{ $product->price }}</strong> </p>
                  <p>Last: <del>{{ $product->lastPrice }}</del></p>    
              </div>
          @endforeach
        </tbody>
      </table>
      {{ $products->links() }}
</div>
<footer>

  

  <!-- Modal -->
  @foreach($products as $product)  
  <!-- Modal Product {{ $product->id }} -->
  <div class="modal fade" id="modelId{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <label class="modal-title">Product ID: {{ $product->id }}</label>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          @foreach($product->promotions as $key => $promotion)
            <div>
              {{ ($key+1).'. '.$promotion->description }}
            </div>
          @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection
