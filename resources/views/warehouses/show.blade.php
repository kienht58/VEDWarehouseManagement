@extends('layout.layout')

@section('title')
<title>Warehouse Lists</title>
@stop

@section('content')
<h2 style="text-align: center">{{$warehouse->name}} information</h2>
<div class="row">
        </div>
        <div class="row">
            <div id="panel-table">

                 <div class="col-md-10">
                <ul class="list-group" >
                    <li class="list-group-item" id="tble-content">Warehouse ID: {{$warehouse->warehouse_id}}</li>
                    <li class="list-group-item" id="tble-content">Name: {{$warehouse->name}}</li>
                    <li class="list-group-item" id="tble-content">Address: {{$warehouse->address}}</li>
                    <li class="list-group-item" id="tble-content">Contact: {{$warehouse->contact}}</li>
                    <li class="list-group-item" id="tble-content">Note: {{$warehouse->note}}</li>
                </ul>

                    <h2 style="text-align: center">Categories in {{$warehouse->name}}</h2>
                    <a href="{{route('categories.create', $warehouse->id)}}"><button class="btn btn-primary">Create new category</button></a>
                    <div class="panel panel-default panel-table" style="margin-top: 5px">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list" style="text-align: center">
                            <thead>
                                <tr>
                    <th id="tble-content">Code</th>
                    <th id="tble-content">Name</th>
                    <th id="tble-content">Quantity</th>
                           <th><center><em class="fa fa-cog"></em></center></th>
                </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td id="tble-content">{{$category->code}}</td>
                    <td id="tble-content">{{$category->name}}</td>
                    <td id="tble-content">{{$category->quantity}}</td>
                    <td id="tble-content">
                        <a href="{{route('categories.show', [$warehouse->id, $category->id])}}"><button class="btn btn-primary">Details</button></a>
                        <a href="{{route('categories.edit', [$warehouse->id, $category->id])}}"><button class="btn btn-info">Edit</button></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
    </table>
@stop