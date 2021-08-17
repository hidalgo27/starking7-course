<div>
    @if(session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.students.create')}}">Crear Alumno</a>
        </div>
        <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="search" type="text" class="form-control w-100" placeholder="Escriba un nombre ...">
        </div>
        @if($course_users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Curso</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($course_users as $course_user)

                        @if($course_user->users)
                        <tr>
                            <td>{{$course_user->users->id}}</td>
                            <td>{{$course_user->users->name}}</td>
                            <td>{{$course_user->users->email}}</td>
                            <td>{{$course_user->course->title}}</td>
                            <td width="10px">
                                <button class="btn btn-danger btn-sm" type="button" wire:click="destroy({{$course_user->users}})">Eliminar</button>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$course_users->links()}}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
