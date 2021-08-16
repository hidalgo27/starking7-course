@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Lista de alumnos por curso</h1>
@stop

@section('content')
    @livewire('admin.students-course')
@stop

@section('css')
    /*<link rel="stylesheet" href="/css/admin_custom.css">*/
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="//unpkg.com/alpinejs" defer></script>
@stop
