<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Starking 7</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

        @livewireStyles

        @stack('css')

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        <footer class="bg-cover bg-gray-900 bg-top" style="background-image: url({{asset('images/footer.png')}})" id="contacto">
{{--            <img src="{{asset('images/footer.png')}}" alt="">--}}
            <div class="container grid grid-cols-2 pt-32">
                <div class="">
                    <h3 class="text-yellow-500 font-bold text-3xl mb-2">Ponerse en contacto</h3>
                    <p class="font-bold text-yellow-400">Principal:</p>
                    <p class="text-gray-300"><i class="fas fa-location-arrow"></i> Av. Micaela Bastidas 258 Of. 606 Edificio El Roble Wanchaq, Cusco, Perú</p>
                    <p class="font-bold text-yellow-400 mt-3">Sedes:</p>
                    <p class="text-gray-300"><i class="fas fa-location-arrow"></i> 230 S Broad St. 17th floor, Of. 19, Philadelphia, PA, 19102, Estados Unidos</p>

                    <p class="my-3 text-gray-200"><i class="fas fa-phone"></i> 932 295953</p>
                    <p class="text-gray-200"><i class="fas fa-envelope"></i> gerencia@starking7.com</p>
                </div>
                <div class="">
                    <h3 class="text-yellow-500 font-bold text-3xl mb-2">Envíenos un mensaje</h3>
                    <form action="">
                        <span class="text-gray-200">Nombre</span>
                        <input type="text" class="form-input mb-4" placeholder="Nombre completo">
                        <span class="text-gray-200">Email</span>
                        <input type="text" class="form-input mb-4" placeholder="Email">
                        <span class="text-gray-200">Mensaje</span>
                        <input type="text" class="form-input mb-4" placeholder="Mensaje">
                        <button class="btn-primary">Enviar</button>
                    </form>
                </div>
                <div class="col-span-2 mt-6">
                    <hr>
                    <p class="my-3 text-gray-300">© 2021 - nebulaperu.com. All rights reserved</p>
                </div>
            </div>
        </footer>

        @livewireScripts

        @stack('scripts')

        @isset($js)
            {{$js}}
        @endisset
    </body>
</html>
