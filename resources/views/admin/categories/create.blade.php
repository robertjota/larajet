@extends('adminlte::page')

@section('title', 'Crear categoria')

@section('content_header')
    <h1>Crear Categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=> 'admin.categories.store']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Ingrese nombre de la categoria']) !!}
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el Slug de la categoria', 'readonly']) !!}
                    @error('slug')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                {!! Form::submit('Crear Categoria', ['class' => 'btn btn-success pull-right']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop


@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@stop
