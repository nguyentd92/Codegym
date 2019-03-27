@extends('layouts.sale_manager')

@section('content')
    <div class="container">
        <table class="table table-bordered table-sm">
            <thead>
            <tr>
                <th>Day</th>
                <th>Quantity</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            @foreach($db as $key => $record)
            <tr>
                <td>{{ $record->date }}</td>
                <td>{{ $record->quantity }}</td>
                <td>{{ $record->amount }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection