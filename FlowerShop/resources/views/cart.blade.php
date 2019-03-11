@extends('layouts.shoplayout')

@section('section')
    <div class="container">
        <div class="col-md-12">
        <!-- Cart items-->
            <div class='col-md-8'>
                @foreach($items as $key => $item)
                    <h4>{{ ++$key }}. ID: {{ $item->id }} | {{ $item->name }}</h4>
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{asset('storage/'.$item->image)}}" alt="" style="width: 100%">
                        </div>
                        <div class="col-md-7">
                            <div>Description: {{ $item->description }}</div>                        
                            <div class="well">
                                <div>Promotion: <br/>
                                @foreach($item->promotions as $k => $promotion) 
                                    {{ ++$k }}. {{ $promotion->description }}<br/>
                                @endforeach
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div>Price: {{ $item->price }}</div>
                                    <div>Last Price: <del>{{ $item->lastPrice }}</del></div> 
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-danger" onclick="window.location.href='{{ route('cart', ['remove' => $item->id])}}'">Remove</button>
                                </div>
                            </div>   

                        </div>

                    </div>                
                @endforeach
            </div>
            <!-- Orders -->
           <div class="col-md-4">
                <div>
                    <h4>Order</h4>
                    <div>
                        @foreach($items as $key => $item)
                        <div class="row">
                            <div class="col-md-8"><strong>{{ ++$key }}. {{ $item->name }}</strong></div>
                            <div class="col-md-4" style="text-align:right;"><strong>{{ $item->price }}</strong></div>                                
                        </div>                                                              
                        @endforeach  
                        <div class="row">
                            <?php $total = 0; foreach($items as $item) { $total += $item->price; }; ?>                         
                            <form action="{{ route('buy')}}" method="post">
                                @csrf
                                <div class="col-md-8">
                                        <label for="total"><strong>Total: $</strong></label><br/>
                                </div>
                                <div class="col-md-4" style="text-align: right">
                                    <strong style="color:brown;">{{ $total }}</strong>
                                </div>            
                                    <input type="text" hidden name="_method" value="put">                                                        
                                    <input type="submit" class="btn btn-primary" value="Buy"/>
                            </form>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </div>




    
@endsection 