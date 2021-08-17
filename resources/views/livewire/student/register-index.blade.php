
<div>
    <!-- Modal -->
    <div x-data="{ showModal : false }">
        <!-- Button -->
{{--        <button type="button" @click="showModal = !showModal" class="btn-danger mt-2 btn-block">Matricularme a este curso</button>--}}
        <button type="button" @click="showModal = !showModal" class="btn-danger mt-2 btn-block">REGISTRO PARA CERTIFICACIÓN</button>
        <!-- Modal Background -->
        <div x-show="showModal" class="fixed text-gray-500 flex items-center justify-center overflow-auto z-50 bg-gray-800 bg-opacity-90 left-0 right-0 top-0 bottom-0" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
            <!-- Modal -->
            <div x-show="showModal" class="bg-white rounded-xl shadow-2xl p-6 sm:w-10/12 md:w-4/12 mx-10" @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                <!-- Title -->
                <h3 class="text-2xl text-center font-bold text-gray-500">Matricula</h3>

                <div class="border bg-gray-100 text-center p-2 mb-3">
                    Si no tiene una cuenta llene el formulario:
                </div>

                <!-- Some beer 🍺 -->
                <form wire:submit.prevent="store">
                    <div class="mb-2 mt-6">
                        <label for="name">Nombre completo</label>
                        <input wire:model="name" type="text" class="form-input " placeholder="" id="name">
                        @error('name')
                        <span class="text-xs text-red-500">(*{{$message}})</span>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="email">Email</label>
                        <input wire:model="email" type="email" class="form-input " placeholder="" id="email">
                        @error('email')
                        <span class="text-xs text-red-500">(*{{$message}})</span>
                        @enderror
                    </div>

                    {{--        <div class="">--}}
                    {{--            <label for="celular">Celular (whatsapp)</label>--}}
                    {{--            <input wire:model="celular" type="number" class="form-input " placeholder="" id="celular">--}}
                    {{--        </div>--}}

                    <div class="mb-4">
                        <label for="password">Contraseña</label>
                        <input wire:model="password" type="password" class="form-input " placeholder="" id="password">
                        @error('password')
                        <span class="text-xs text-red-500">(*{{$message}})</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn-danger mt-2 btn-block">Matricularme a este curso</button>
                    <a href="/login" class="text-blue-500 font-bold text-sm text-center mt-2 block mx-auto">¿Ya estás registrado?. Inicie Sessión aqui.</a>
                </form>
            </div>
        </div>
    </div>

</div>
