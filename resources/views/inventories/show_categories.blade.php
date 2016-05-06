@extends('layout.layout')

@section('title')
<title>Inventory checking</title>
@stop

@section('content')
<h2 style="text-align: center">Categories List</h2>
<div class="row">
        </div>
        <div class="row">
            <div id="panel-table">
                 <div class="col-md-6 col-md-offset-2">
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-list">
                                <thead style="text-align: center">
                                    <tr>
                                        <th class="hidden-xs" id="tble-content">code</th>
                                        <th id="tble-content">Name</th>
                                        <th id="tble-content">Quantity</th>
                                    </tr> 
                                  </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                        <a href="{{route('inventories.show_products', [$warehouse_id, $category->id])}}"><tr style="text-align: center">
                                            <td id="tble-content">{{$category->code}}</td>
                                            <td id="tble-content">{{$category->name}}</td>
                                            <td id="tble-content">{{$category->quantity}}</td>
                                        </tr></a>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop