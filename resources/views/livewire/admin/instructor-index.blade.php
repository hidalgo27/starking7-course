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
                                <button class="btn btn-danger btn-sm" type="button" wire:click="destroy({{$user}})">Eliminar</button>
                            </td>
                        </tr>
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
