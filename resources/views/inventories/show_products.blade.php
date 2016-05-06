@extends('layout.layout')

@section('title')
<title>Inventory checking</title>
@stop

@section('content')
<h2 style="text-align: center">Products List</h2>
<div class="row">
        </div>
        <div class="row">
            <div id="panel-table">
                <div class="col-md-6 col-md-offset-2">
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                        {!! Form::open([
                                        'route' => ['inventories.update'],
                                        'method' => 'PUT',
                                        'class' => 'form-horizontal'
                                    ])
                        !!}
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
                                            <td id="tble-content">
                                                {!! Form::select('status', $status, null,  ['id' => 'status',  'class' => 'form-control']) !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! Form::submit('Update', [ 'class' => 'btn btn-success pull-right' ])!!}
                        {!!Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop