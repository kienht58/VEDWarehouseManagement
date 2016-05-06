@extends('layout.layout')

@section('title')
<title>Category Details</title>
@stop
@section('content')
<h2 style="text-align: center">Category : {{$category->name}} information</h2>
<div class="row">
        </div>
        <div class="row">
            <div id="panel-table">
                 <div class="col-md-10">
        <ul class="list-group">
            <li  class="list-group-item"  id="tble-content">Category code: {{$category->code}}</li>
            <li  class="list-group-item" id="tble-content">Name: {{$category->name}}</li>
            <li  class="list-group-item" id="tble-content">Quantity: {{$category->quantity}}</li>
        </ul>
        <h3 style="text-align: center"> Product in {{$category->name}}</h3>
        <div class="panel panel-default panel-table" id="tble-content" style="text-align: center">
                    <div class="panel-heading">
                        <div class="row">
                        </div>
                    </div>
                <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                                <tr>
                    <th id="tble-content">Suplier</th>
                    <th id="tble-content">Serial</th>
                    <th id="tble-content">Serial from supplier</th>
                    <th id="tble-content">Status</th>
                    <th><center><em class="fa fa-cog"></em></center></th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td id="tble-content">{{$product->supplier_id}}</td>
                        <td id="tble-content">{{$product->serial}}</td>
                        <td id="tble-content">{{$product->serial_from_supplier}}</td>
                        <td id="tble-content">{{$product->status}}</td>
                        <td id="tble-content">
                            <a href="{{route('products.show', [$category->warehouse_id, $category->id, $product->id])}}"><button class="btn btn-primary">Details</button></a>
                            <a href="{{route('products.edit', [$category->warehouse_id, $category->id, $product->id])}}"><button class="btn btn-primary">Edit</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@stop