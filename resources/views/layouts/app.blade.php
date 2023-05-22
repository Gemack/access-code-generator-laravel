<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('public/img/css/custom.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <style>
        @media (min-width: 1024px) {
  #menu {
    animation-name: none !important;
  }
}

    </style>
    <body class="font-sans antialiased">
        <button id="toggleButton" class=" float-right">
            <i id="menuIcon" class="fa-solid fa-bars text-blue-500 text-2xl mt-3 mr-2 lg:hidden"></i>
        </button>
            <nav class="lg:flex justify-between items-center lg:shadow-md lg:bg-transparent opacity-70 lg:w-full w-2/3 text-sm">
                <div class=" ml-2 w-1/4">
                    <div class="rounded-full h-12 w-12 flex items-center justify-center bg-blue-500">
                        <i class="fa-sharp fa-solid fa-shield-halved text-white"></i>
                    </div>
                </div>
                <div id="menu" class="w-3/4 lg:flex justify-between hidden lg:transform-none animate__animated animate__slideInLeft lg:animate-none">
                    <div class="text-blue-500 lg:flex w-3/4 py-4 px-7 justify-evenly pl-20">
                      <a href="/" class="capitalize block my-2 hover:font-bold transition-all duration-1000">home</a>
                      <a href="/" class="my-2 capitalize block  hover:font-bold transition-all duration-1000">about us</a>
                      <a href="/" class="my-2 capitalize block  hover:font-bold transition-all duration-1000">security</a>
                      <a href="/" class="my-2 capitalize block  hover:font-bold transition-all duration-1000">team</a>
                      <a href="/" class="my-2 capitalize block  hover:font-bold transition-all duration-1000">contact</a>
                    </div>
                    <div class="lg:w-1/4 flex lg:justify-evenly items-center text-blue-500 w-full mt-3">
                      <a href="/" class="capitalize text-small md:text-base ml-4">login</a>
                      <button class="bg-blue-500 lg:p-2 rounded-md w-32 p-2 ml-4">
                        <a href="/" class="capitalize text-white">get started</a>
                      </button>
                    </div>
                  </div>
            </nav>
            <main>
                {{ $slot }}
            </main>
            <script>
                var menu = document.getElementById('menu');
                var menuIcon = document.getElementById('menuIcon');
                var toggleButton = document.getElementById('toggleButton');

                toggleButton.addEventListener('click', function() {
                  if (menu.classList.contains('hidden')) {
                    menu.classList.remove('animate__slideOutLeft');
                    menu.classList.add('animate__slideInLeft');
                  } else {
                    menu.classList.remove('animate__slideInLeft');
                    menu.classList.add('animate__slideOutLeft');
                  }
                  menu.classList.toggle('hidden');
                  menuIcon.classList.toggle('fa-bars');
                  menuIcon.classList.toggle('fa-times');
                });
              </script>

        @livewireScripts
    </body>
</html>
