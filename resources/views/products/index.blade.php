@extends('layout.layout')

@section('title')
<title>Products List</title>
@stop

@section('content')
<h1 style="text-align: center">Product list</h1>
    <div id="panel-table">
                <div class="col-md-7 col-md-offset-1">
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-list">
                                <thead style="text-align: center">
                                    <tr>
                                        <th class="hidden-xs" id="tble-content">Serial</th>
                                        <th id="tble-content">Serial from supplier</th>
                                        <th id="tble-content">Status</th>
                                    </tr> 
                                  </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr style="text-align: center">
                                            <td id="tble-content">{{$product->serial}}</td>
                                            <td id="tble-content">{{$product->serial_from_supplier}}</td>
                                            <td id="tble-content">{{$product->status}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@stop