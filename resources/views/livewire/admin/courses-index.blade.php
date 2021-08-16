<div>
    <div class="card">
        <div class="card-header">
            <a href="{{route('instructor.courses.create')}}">Crear Curso</a>
        </div>
        <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="search" type="text" class="form-control w-100" placeholder="Escriba un nombre ...">
        </div>
        @if($courses->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
{{--                        <th>Email</th>--}}
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{$course->id}}</td>
                            <td>{{$course->title}}</td>
                            <td>{{$course->teacher->name}}</td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{route('admin.courses.certifications', $course)}}">Certificados</a>
                            </td>
                            <td width="150px">
                                <a class="btn btn-sm btn-primary" href="{{route('admin.courses.assign', $course)}}">Asignar docente</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$courses->links()}}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
