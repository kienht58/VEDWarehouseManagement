@extends('layout.layout')

@section('title')
<title>Create new category</title>
@stop

@section('content')
    <div class="container">
        <h1>Create new category</h1>
        {!! Form::open([
                        'route' => ['products.store', $warehouse_id, $category_id],
                        'method' => 'POST',
                        'class' => 'form-horizontal'
                    ])
        !!}

            <div class="form-group">
                {!! Form::label('supplier_id', 'Supplier id', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('supplier_id', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('serial', 'Serial', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('serial', '', [ 'class' => 'form-control', 'required']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('serial_from_supplier', 'Serial from supplier', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('serial_from_supplier', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('status', 'Status', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('status', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Thêm', [ 'class' => 'btn btn-primary pull-right' ])!!}
                <a href="{{route('products.index', [$warehouse_id, $category_id] )}}"><button class="btn btn-warning pull-right">Cancel</button></a>
            </div>
        {!! Form::close() !!}
    </div>
@stop