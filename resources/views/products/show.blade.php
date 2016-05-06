@extends('layout.layout')

@section('title')
<title>Category Details</title>
@stop

@section('content')
<h1 style="text-align: center" id="tble-content">Product 's information</h1>
        <ul class="list-group">
            <li class="list-group-item" id="tble-content">Serial: {{$product->serial}}</li>
            <li class="list-group-item" id="tble-content">Serial from supplier: {{$product->serial_from_supplier}}</li>
            <li class="list-group-item" id="tble-content">Status: {{$product->status}}</li>
        </ul>
        <a href="{{route('products.edit', [$warehouse_id, $category_id, $product->id])}}"><button class="btn btn-primary pull-left">Edit</button></a>
        {!! Form::open([
	            'route' => ['products.destroy', $warehouse_id, $category_id, $product->id],
	            'method' => 'DELETE',
			    'style' =>'display: inline'
            ])
		!!}
			<button class="btn btn-danger">Delete</button>
		{!! Form::close() !!}
@stop