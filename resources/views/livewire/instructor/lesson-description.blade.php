<div>
    <article class="card" x-data="{open: false}">
        <div class="card-body bg-gray-100">
            <header>
                <h2 x-on:click="open = !open" class="cursor-pointer">Descripción de la lección</h2>
            </header>

            <div x-show="open">
                <hr class="my-2">
                @if($lesson->description)
                    <form wire:submit.prevent="update">
                        <textarea wire:model="description.name" class="form-input"></textarea>

                        @error('description.name')
                        <span class="text-sm text-red-500">{{$message}}</span>
                        @enderror
                        <div class="flex justify-end mt-2">
                            <button wire:click="destroy" type="button" class="btn btn-danger text-sm">Eliminar</button>
                            <button type="submit" class="btn btn-primary text-sm ml-2">Actualizar</button>
                        </div>
                    </form>
                @else
                    <div>
                        <textarea wire:model="name" class="form-input" placeholder="Agregue una descripción de la lección"></textarea>

                        @error('name')
                        <span class="text-sm text-red-500">{{$message}}</span>
                        @enderror
                        <div class="flex justify-end mt-2">
                            <button wire:click="store" type="button" class="btn btn-primary text-sm ml-2">Agregar</button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </article>
</div>
