<div>
    @foreach($section->lessons as $item)

        <article class="card mt-4" x-data="{open: false}">
            <div class="card-body">

                @if($lesson->id == $item->id)
                    <form wire:submit.prevent="update">
                        <div class="flex items-center">
                            <label class="w-32">Nombres:</label>
                            <input wire:model="lesson.name" type="text" class="form-input">
                        </div>
                        @error('lesson.name')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror

                        <div class="flex items-center mt-4 hidden">
                            <label class="w-32">Plataforma:</label>

                            <select wire:model="lesson.platform_id" class="form-input">
                                @foreach($platforms as $platform)
                                    <option value="{{$platform->id}}">{{$platform->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-center mt-4 hidden">
                            <label class="w-32">Url:</label>
                            <input wire:model="lesson.url" type="text" class="form-input">
                        </div>
                        @error('lesson.url')
                        <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror

                        <div class="mt-4 flex justify-end">
                            <button type="button" class="btn btn-danger" wire:click="cancel">Cancelar</button>
                            <button type="submit" class="btn btn-primary ml-2" wire:click="update">Actualizar</button>
                        </div>

                    </form>
                @else
                    <header>
                        <h2 x-on:click="open = !open" class="cursor-pointer"><i class="far fa-play-circle text-blue-500 mr-1"></i> Lección: {{$item->name}}</h2>
                    </header>

                    <div x-show="open">

                        <hr class="my-2">

                        <p class="text-sm hidden">Plataforma: {{$item->platform->name}}</p>
                        <p class="text-sm hidden">Enlace: <a class="text-blue-600" href="{{$item->url}}" target="_blank">{{$item->url}}</a></p>

                        <div class="my-2">
                            <button class="btn btn-primary text-sm" wire:click="edit({{$item}})">Editar</button>
                            <button class="btn btn-danger text-sm" wire:click="destroy({{$item}})">Eliminar</button>
                        </div>

                        <div class="mb-4">
                            @livewire('instructor.lesson-description', ['lesson' => $item], key('lesson-description' . $item->id))
                        </div>

                        <div>
                            @livewire('instructor.lesson-resources', ['lesson'=> $item], key('lesson-resources' . $item->id))
                        </div>
                    </div>
                @endif
            </div>
        </article>
    @endforeach

        <div class="mt-4" x-data="{open: false}">
            <button x-show="!open" x-on:click="open = true" type="button" class="flex items-center cursor-pointer">
                <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
                Agregar nueva lección
            </button>

            <article class="card" x-show="open">
                <div class="card-body">
                    <h2 class="text-xl font-bold mb-4">Agregar nueva lección</h2>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <label class="w-32">Nombre:</label>
                            <input wire:model="name" type="text" class="form-input">
                        </div>
                        @error('name')
                        <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror

                        <div class="flex items-center mt-4 hidden">
                            <label class="w-32">Plataforma:</label>

                            <select wire:model="platform_id" class="form-input">
                                @foreach($platforms as $platform)
                                    <option value="{{$platform->id}}">{{$platform->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('platform_id')
                        <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror

                        <div class="flex items-center mt-4 hidden">
                            <label class="w-32">Url:</label>
                            <input wire:model="url" type="text" class="form-input">
                        </div>
                        @error('url')
                        <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="flex justify-end">
                        <button class="btn btn-danger" x-on:click="open = false">Cancelar</button>
                        <button class="btn btn-primary ml-2" wire:click="store">Agregar</button>
                    </div>
                </div>
            </article>
        </div>
</div>
