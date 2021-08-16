@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Asignar docente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <span class="mb-2 d-block font-weight-bold">Nombre del curso:</span>
            <p class="form-control">{{$course->title}}</p>



{{--            @foreach($courses as $course)--}}

{{--                {{$course->teacher->name}}<br>--}}
{{--            @endforeach--}}

            {{ Form::model($course, ['route'=> ['admin.courses.assign.update', $course], 'method'=>'post'])  }}

                {!! Form::label('user_id', 'Docente:') !!}
                {!! Form::select('user_id', $instructors, null, ['class' => 'custom-select']) !!}

            {!! Form::submit('Asignar curso', ['class'=>'btn btn-primary mt-4']) !!}
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
