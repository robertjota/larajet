@extends('adminlte::page')

@section('title', 'Editar Etiqueta')

@section('content_header')
    <h1>Editar Etiqueta</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::model($tag, ['route'=> ['admin.tags.update', $tag], 'method' => 'put']) !!}

                @include('admin.tags.partials.form')

                {!! Form::submit('Actualizar Etiqueta', ['class' => 'btn btn-success pull-right']) !!}

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
