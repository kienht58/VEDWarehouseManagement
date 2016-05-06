@extends ('layout/layout')

@section ('title')
    <title>Edit Category</title>
@stop

@section ('content')
    <div class="container">
        <h3>Thay doi thong tin san pham</h3>

                {!! Form::model($product, [
                        'route' => ['products.update', $warehouse_id, $category_id, $product->id],
                        'method' => 'PUT',
                        'class' => 'form-horizontal'
                    ])
                !!}

                    <div class="form-group">
                        {!! Form::label('supplier_id', 'Supplier', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('supplier_id', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('serial', 'Serial', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('serial', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('serial_from_supplier', 'Serial from supplier', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('serial', null, [ 'class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('status', 'Stauts', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('status', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <a href="{{route('products.show', [$warehouse_id, $category_id, $product->id])}}"><button class="btn btn-warning pull-right">Cancel</button></a>
                        {!! Form::submit('Thay doi', [ 'class' => 'btn btn-primary pull-right' ])!!}
                    </div>
                {!! Form::close() !!}
    </div>
@stop