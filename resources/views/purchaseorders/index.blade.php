@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Purchase Orders</h1>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <th>#</th>
                <th>Supplier</th>
                <th>Address</th>
                <th>Order Date</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($purchaseorders as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->address}}</td>
                        <td>{{$row->order_date}}</td>
                        <td>
                            <a href="/purchaseorders/{{$row->id}}">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection