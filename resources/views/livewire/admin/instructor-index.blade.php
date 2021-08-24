<div>
    @if(session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.instructors.create')}}">Crear Instructor</a>
        </div>
        <div class="card-header">
            <input wire:keydown="limpiar_page" wire:model="search" type="text" class="form-control w-100" placeholder="Escriba un nombre ...">
        </div>
        @if($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td width="10px">
{{--                                <form action="{{route('admin.instructors.destroy', $user->id)}}" method="post">--}}
{{--                                    @csrf--}}
{{--                                    @method('delete')--}}

{{--                                </form>--}}
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Modal{{$user->id}}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="Modal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar instructor</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>¿Estas seguro de eliminar al instructor <b>{{$user->name}}</b>? Si elimina el instructor también se eliminará sus cursos que fueron asignados a este instructor.</p>
                                        <p>*** Si deseas que su curso permanezca aginé a otro docente su curso. Puede hacerlo desde
                                            <a href="{{route('admin.courses.all')}}">aquí antes de eliminar.</a></p>
                                        <button class="btn mt-2 btn-danger" type="button" wire:click="destroy({{$user}})">Eliminar de todas formas</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$users->links()}}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
