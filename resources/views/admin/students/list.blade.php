@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Lista de alumnos</h1>
@stop

@section('content')
    @livewire('admin.students')
@stop

@section('css')
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="//unpkg.com/alpinejs" defer></script>
@stop
