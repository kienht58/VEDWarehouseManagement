@extends('layout.layout')

@section('title')
<title>Create new category</title>
@stop

@section('content')
    <div class="container">
        <h1>Create new category</h1>
        {!! Form::open([
                        'route' => ['categories.store', $warehouse_id],
                        'method' => 'POST',
                        'class' => 'form-horizontal'
                    ])
        !!}
            <div class="form-group">
                {!! Form::label('Code', 'Category code', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('code', '', [ 'class' => 'form-control', 'required']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('Name', 'Category name', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('name', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Unit', 'Unit of measurement', [ 'class' => 'control-label' ]) !!}
                {!! Form::text('unit', '', [ 'class' => 'form-control', 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Thêm', [ 'class' => 'btn btn-primary pull-right' ])!!}
                <a href="{{route('categories.index', $warehouse_id)}}"><button class="btn btn-warning pull-right">Cancel</button></a>
            </div>

        {!! Form::close() !!}
    </div>
@stop