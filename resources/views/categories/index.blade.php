@extends('layout.layout')

@section('title')
<title>Warehouse Management</title>
@stop

@section('content')
<h2 style="text-align: center">Category List</h2>
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
                                        <th class="hidden-xs" id="tble-content">code</th>
                                        <th id="tble-content">Name</th>
                                        <th id="tble-content">Quantity</th>
                                        <th><center><em class="fa fa-cog"></em></center></th>
                                    </tr> 
                                  </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                        <tr style="text-align: center">
                                            <td id="tble-content">{{$category->code}}</td>
                                            <td id="tble-content">{{$category->name}}</td>
                                            <td id="tble-content">{{$category->quantity}}</td>
                                            <td id="tble-content"><a href="{{route('categories.show', [$category->warehouse_id, $category->id])}}"><button class="btn btn-primary">Details</button></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop
