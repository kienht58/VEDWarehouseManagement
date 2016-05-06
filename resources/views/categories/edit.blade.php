@extends ('layout/layout')

@section ('title')
    <title>Edit Category</title>
@stop

@section ('content')
    <div class="container">
        <h3>Thay doi thong tin danh muc san pham</h3>

                {!! Form::model($category, [
                        'route' => ['categories.update', $warehouse_id, $category->id],
                        'method' => 'PUT',
                        'class' => 'form-horizontal'
                    ])
                !!}

                    <div class="form-group">
                        {!! Form::label('code', 'Code', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('code', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('name', 'name', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('name', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('unit', 'unit', [ 'class' => 'control-label' ]) !!}
                        {!! Form::text('unit', null, [ 'class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Thay doi', [ 'class' => 'btn btn-primary pull-right' ])!!}
                        <a href="{{route('categories.show', [$warehouse_id, $category->id])}}"><button class="btn btn-warning pull-right">Cancel</button></a>
                    </div>
                {!! Form::close() !!}
    </div>
@stop