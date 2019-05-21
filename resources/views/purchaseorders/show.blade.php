@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Order Details</h1>
        </div>
        <div class="col">
            <a href="/" class="btn btn-danger float-right">Back</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <th>Item</th>
                <th>Quantity</th>
                <th>Estimate Cost</th>
            </thead>
            <tbody>
                @foreach($orderdetails as $row)
                <tr>
                    <td>{{$row->description}}</td>
                    <td>{{$row->quantity}}</td>
                    <td>{{$row->estimate_cost}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection