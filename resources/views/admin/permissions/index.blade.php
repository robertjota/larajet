@extends('adminlte::page')

@section('title', 'Listado de Permisos')

@section('content_header')
    {{-- @can('admin.permissions.create') --}}
        <a class="btn btn-primary btn-sm float-right" href="{{ route('admin.permissions.create') }}">Agregar Nuevo Permiso</a>
    {{-- @endcan --}}
<h1>Listado de Permisos</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <td>{{$permission->id}}</td>
                            <td>{{$permission->name}}</td>
                            <td>{{$permission->description}}</td>
                            <td width="10px">
                                @can('admin.permissions.edit')
                                    <a class="btn btn-warning btn-sm" href="{{ route('admin.permissions.edit', $permission) }}">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.permissions.destroy')
                                    <form action="{{ route('admin.permissions.destroy', $permission) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    /* swal.fire(
        'Buen Trabajo',
        'esto es sweetalert2',
        'success'
    ) */
</script>
@stop
