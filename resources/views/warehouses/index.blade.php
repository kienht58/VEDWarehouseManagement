@extends('layout.layout')

@section('title')
<title>Warehouse Management</title>
@stop

@section('content')
<h2 style="text-align: center">Warehouse List</h2>
<div class="row">
        </div>
        <div class="row">
            <div id="panel-table">
                 <div class="col-md-10">
                    <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead style="text-align: center">
                                <tr>
                                    <th class="hidden-xs" id="tble-content">ID</th>
                                    <th id="tble-content">Name</th>
                                    <th id="tble-content">Address</th>
                                    <th id="tble-content">Contact</th>
                                    <th id="tble-content">Note</th>
                                    <th><center><em class="fa fa-cog"></em></center></th>
                                </tr> 
                              </thead>
                        <tbody>
                @foreach($warehouses as $warehouse)
                    <tr style="text-align: center">
                        <td id="tble-content">{{$warehouse->warehouse_id}}</td>
                        <td id="tble-content">{{$warehouse->name}}</td>
                        <td id="tble-content">{{$warehouse->address}}</td>
                        <td id="tble-content">{{$warehouse->contact}}</td>
                        <td id="tble-content">{{$warehouse->note}}</td>
                        <td id="tble-content">
                            <a href="{{route('warehouses.show', $warehouse->id)}}"><button class="btn btn-primary">Details</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop