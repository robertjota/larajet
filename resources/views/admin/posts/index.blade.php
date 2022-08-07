@extends('adminlte::page')

@section('title', 'Listado de Posts')

@section('content_header')
    <a class="btn btn-primary btn-sm float-right" href="{{ route('admin.posts.create') }}">Agregar Post</a>
    <h1>Listado de Posts</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    @livewire('admin.posts-index')
@stop

