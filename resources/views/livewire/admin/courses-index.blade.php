<div>
    @if(session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
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
                            <td width="10px">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Modal{{$course->id}}">
                                    Eliminar
                                </button>


{{--                                <button class="btn btn-danger btn-sm" type="button" wire:click="destroy({{$course}})">Eliminar</button>--}}
{{--                                {{$coursea}}--}}
                            </td>

                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="Modal{{$course->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar curso</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Estas seguro de eliminar curso?</p>
                                        <form action="{{route('admin.courses.find.deleted', $course)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" type="submit">Eliminar de todas maneras</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
