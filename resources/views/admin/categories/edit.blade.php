@extends('adminlte::page')

@section('title', 'Editar etiqueta')

@section('content_header')
    <h1>Editar Etiqueta</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($category, ['route'=> ['admin.tags.update', $category], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Ingrese nombre de la etiqueta']) !!}
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el Slug de la etiqueta', 'readonly']) !!}
                    @error('slug')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                {!! Form::submit('Actualizar etiqueta', ['class' => 'btn btn-success pull-right']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
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
