@extends('layout.layout')

@section('title')
<title>Create new requests</title>
@stop

@section('content')
    <div class="container">
        <h1>Create new requests</h1>
        {!! Form::open([
                        'route' => ['warehouse_requests.store', $warehouse_id],
                        'method' => 'POST',
                        'class' => 'form-horizontal',
                        'files' => 'true'
                    ])
        !!}
            <div class="form-group">
                {!! Form::label('Code', 'Request code', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('code', '', [ 'class' => 'form-control', 'required']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('Type', 'Request type', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('type', '', [ 'class' => 'form-control', 'required']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('Supplier', 'Supplier', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('supplier_id', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Quantity', 'Quantity', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('quantity', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Cost', 'Cost per unit', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('cost_per_unit', '', [ 'class' => 'form-control', 'required']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('Note', 'Request note', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('note', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Products', 'Import products from excel', [ 'class' => 'control-label' ]) !!}
                {!! Form::file('file', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Thêm', [ 'class' => 'btn btn-primary pull-right' ])!!}
                <a href="{{route('warehouse_requests.index', $warehouse_id)}}"><button class="btn btn-warning pull-right">Cancel</button></a>
            </div>

        {!! Form::close() !!}
    </div>
@stop