@extends('adminlte::page')

@section('title', 'Instructores')

@section('content_header')
    <h1>Crear instructor</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.instructors.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre completo']) !!}
                @error('name')
                <span class="text-danger d-block">{{$message}}</span>
                @enderror

                {!! Form::label('email', 'Email', ['class' => 'mt-2']) !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese email del instructor']) !!}
                @error('email')
                <span class="text-danger d-block">{{$message}}</span>
                @enderror

                {!! Form::label('password', 'Contraseña', ['class' => 'mt-2']) !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
                @error('password')
                <span class="text-danger d-block">{{$message}}</span>
                @enderror
            </div>

            {!! Form::submit('Crear instructor', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
