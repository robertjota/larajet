@extends('adminlte::page')

@section('title', 'Editar Permiso')

@section('content_header')
<h1>Editar Permiso</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::model($permission, ['route'=> ['admin.permissions.update', $permission], 'method' => 'put']) !!}

                @include('admin.permissions.partials.form')

                {!! Form::submit('Actualizar Permiso', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
