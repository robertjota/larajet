<div class="form-group">
    {!! Form::label('name', 'Ruta') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Ingrese la ruta del permiso']) !!}
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('description', 'Descripción') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' =>'Ingrese la descripción del permiso']) !!}
    @error('description')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
