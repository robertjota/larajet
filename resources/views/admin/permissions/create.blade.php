@extends('adminlte::page')

@section('title', 'Crear Permiso')

@section('content_header')
<h1>Crear Permiso</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=> 'admin.permissions.store']) !!}

                @include('admin.permissions.partials.form')

                {!! Form::submit('Crear Permiso', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
