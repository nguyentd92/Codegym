@extends('layouts.admin')

@section('section')
    <div class="container">
        <div class="col-md-8">
            <table class="table striped">
                @foreach($orders as $key => $order)
                    <tr class="row">
                        <td>
                            {{ ++$key }}
                        </td>
                        <td class="col-md-2">
                            {{ $order->id}}
                        </td>
                        <td class="col-md-7">
                            @foreach ($order->products as $item)
                            <label for="">{{ str_limit($item->id.'. '.$item->name, 20) }}</label>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection