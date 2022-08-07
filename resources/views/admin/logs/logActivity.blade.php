@extends('adminlte::page')

@section('title', 'Listado de Etiquetas')

@section('content_header')
    @can('admin.tags.create')
        <a class="btn btn-primary btn-sm float-right" href="{{ route('admin.logs.create') }}">Agregar log</a>
    @endcan
    <h1>Listado de Logs</h1>
@stop

@section('content')
    {{-- @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif --}}

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Subject</th>
                        <th>URL</th>
                        <th>Method</th>
                        <th>Ip</th>
                        <th width="300px">User Agent</th>
                        <th>User Id</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($logs->count())
                        @foreach($logs as $key => $log)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $log->subject }}</td>
                            <td class="text-success">{{ $log->url }}</td>
                            <td><label class="label label-info">{{ $log->method }}</label></td>
                            <td class="text-warning">{{ $log->ip }}</td>
                            <td class="text-danger">{{ $log->agent }}</td>
                            <td>{{ $log->user_id }}</td>
                            <td><button class="btn btn-danger btn-sm">Delete</button></td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
    <script>
        var info = "{{session('info')}}";
        if (info) {
            Swal.fire({
                type: 'success',
                title: '{{session('info')}}',
                showConfirmButton: false,
                timer: 2500
            })
        }
    </script>
@stop
