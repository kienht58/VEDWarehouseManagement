@extends('layout.layout')

@section('title')
<title>Warehouse Requests</title>
@stop

@section('content')
<h2 style="text-align: center">List of warehouse requests</h2>
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
                                    <th id="tble-content">Code</th>
                                    <th id="tble-content">Type</th>
                                    <th id="tble-content">Status</th>
                                    <th><center><em class="fa fa-cog"></em></center></th>
                                </tr> 
                              </thead>
                        <tbody>
                @foreach($warehouse_requests as $request)
                    <tr style="text-align: center">
                        <td id="tble-content">{{$request->code}}</td>
                        <td id="tble-content">{{$request->type}}</td>
                        <td id="tble-content" class="editable">{{$request->status}}</td>
                        <td id="tble-content">
                            <a href="{{route('warehouse_requests.show', [$warehouse_id, $request->id])}}"><button class="btn btn-primary">Details</button></a>
                            <a href="{{route('warehouse_requests.edit', [$warehouse_id, $request->id])}}"><button class="btn btn-info disable">Edit</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        var editable = document.getElementsByClassName("editable");

        for(var i = 0; i < editable.length; i++)
            if(editable[i].textContent != 1) {
                document.getElementsByClassName("disable")[i].disabled = true;
            }
    </script>
@stop