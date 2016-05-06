@extends('layout.layout')

@section('title')
<title>Inventory checking</title>
@stop

@section('content')
    <div class="col-md-4 col-md-offset-4">
    {!! Form::open([
                        'route' => ['inventories.promptRequest'],
                        'method' => 'POST',
                        'class' => 'form-horizontal'
                    ])
        !!}
            <div class="form-group">
                {!! Form::label('Warehouse', 'Warehouse', [ 'class' => 'control-label' ]) !!}
                {!! Form::select('warehouse_id', $warehouses, null,  ['id' => 'warehouse_id',  'class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Continue', [ 'class' => 'btn btn-primary pull-right' ])!!}
            </div>

        {!! Form::close() !!}
    </div>
@stop