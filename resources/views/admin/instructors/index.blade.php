@extends('adminlte::page')

@section('title', 'Instructores')

@section('content_header')
    <h1>Lista de instructores</h1>
@stop

@section('content')
    @livewire('admin.instructor-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
