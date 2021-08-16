@extends('adminlte::page')

@section('title', 'Instructores')

@section('content_header')
    <h1>Crear Certificado para {{$course->title}}</h1>
@stop

@section('content')
    <div class="card">
        @if(session('info'))
            <div class="alert alert-success">
                {{session('info')}}
            </div>
        @endif
        <div class="card-body">
            {!! Form::open(['route' => ['admin.courses.certifications.store', $course], 'files'=>'true']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Título') !!}
                {!! Form::text('title', $course->title, ['class' => 'form-control', 'placeholder' => 'Titulo del certificado']) !!}

                {!! Form::hidden('course_id', $course->id) !!}
                @error('title')
                <span class="text-danger d-block">{{$message}}</span>
                @enderror

                {!! Form::label('subtitle', 'Sub título', ['class' => 'mt-2']) !!}
                {!! Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Sub título del certiticado']) !!}
                @error('subtitle')
                <span class="text-danger d-block">{{$message}}</span>
                @enderror

                {!! Form::label('hours', 'Horas', ['class' => 'mt-2']) !!}
                {!! Form::text('hours', null, ['class' => 'form-control', 'placeholder' => 'Total de horal del certificado']) !!}
                @error('hours')
                <span class="text-danger d-block">{{$message}}</span>
                @enderror

                {{--                {!! Form::label('file', 'Plantilla del certificado', ['class' => 'mt-2 d-block']) !!}--}}
                {{--                {!! Form::file('file', null, ['class' => 'form-control-file']) !!}--}}
                {{--                @error('file')--}}
                {{--                <span class="text-danger d-block">{{$message}}</span>--}}
                {{--                @enderror--}}

                {{--                <figure>--}}
                {{--                    @isset($course->image)--}}
                {{--                        <img id="picture" class="w-full h-64 object-cover object-center" src="{{Storage::url($course->image->url)}}" alt="">--}}
                {{--                    @else--}}
                {{--                        <img id="picture" class="w-full h-64 object-cover object-center" src="https://images.pexels.com/photos/5905710/pexels-photo-5905710.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">--}}
                {{--                    @endisset--}}
                {{--                </figure>--}}
                <div class="">
                    {{--                    <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium libero necessitatibus omnis ut. Commodi excepturi inventore ipsa labore molestiae nam praesentium quia repellendus veritatis. At cum dolorem officia pariatur saepe.</p>--}}
                    {!! Form::label('file', 'Plantilla del certificado', ['class' => 'mt-2 d-block']) !!}
                    {!! Form::file('file', ['class'=>'form-input w-full' . ($errors->has('file') ? ' border-red-600' : ''), 'id'=>'file', 'accept' => 'image/*']) !!}

                    @error('file')
                    <span class="text-danger d-block">{{$message}}</span>
                    @enderror
                </div>

                <div class="mt-3">
                    {!! Form::radio('status', '1', true) !!} Normal
                    <br>
                    {!! Form::radio('status', '2') !!} Con CIP
                </div>

            </div>

            {!! Form::submit('Crear certificado', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Horas</th>
                    <th>Tipo</th>
                    <th colspan="2"></th>
                </tr>
                </thead>
                <tbody>
                @forelse($course->course_certification as $course_certifications)
                    <tr>
                        <td>{{$course_certifications->id}}</td>
                        <td>{{$course_certifications->title}}</td>
                        <td>{{$course_certifications->hours}}</td>
                        @if($course_certifications->status == 1)
                            <td>Normal</td>
                        @else
                            <td class="text-success">Con CIP</td>
                        @endif
                        <td width="10px">
                            <a href="{{route('admin.roles.edit', $course_certifications)}}" class="btn btn-secondary">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.roles.destroy', $course_certifications)}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            No hay resultados
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
