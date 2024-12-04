<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>taxation - @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- PUSH STYLES --}}
     @stack('styles')
     @livewireStyles
    </head>
    <body class="font-sans antialiased">






 {{-- MAIN NAVIGATION BAR --}}
        @include('agent.partials.navbar')

         {{-- SIDEBAR LEFT --}}

            @include('agent.partials.sidebar')




            {{-- MAIN CONTENT --}}


            @yield('content')


        {{-- MAIN NAVIGATION BAR --}}
        @include('agent.partials.footer')









@yield('scripts')
  <!-- container-scroller -->
    <!-- plugins:js -->

  <!-- endinject -->





  @livewireScripts
    </body>
</html>
