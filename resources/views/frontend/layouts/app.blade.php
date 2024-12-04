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
 <!-- Google font (font-family: 'Josefin Sans', sans-serif;) -->
 <link href="../../css-1?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- CSS
============================================ -->

<!-- Icon Font CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/plugins/pe-icon-7-stroke.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/flaticon.css') }}">

<!-- Plugins CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/fakeloader.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/meanmenu.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/animated-headline.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/youtubepopup.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/calender.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/plyr.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/datepicker.min.css') }}">

<!-- Main Style CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  {{-- PUSH STYLES --}}
     @stack('styles')
     @livewireStyles
    </head>
    <body class="font-sans antialiased">

        <div class="fakeloader"></div>





 {{-- MAIN NAVIGATION BAR --}}
        @include('frontend.partials.header')





  <!-- Main wrapper -->
  <div class="wrapper" id="wrapper">
    <!-- Start Header -->
            {{-- MAIN CONTENT --}}


            @yield('content')


        {{-- MAIN NAVIGATION BAR --}}
        @include('frontend.partials.footer')







 <!-- Back To Top Start -->
 <button id="backBTn" class="backbtn"><i class="fa fa-angle-up"></i></button>
 <!-- //Back To Top end -->

</div>


@yield('scripts')
  <!-- container-scroller -->
    <!-- plugins:js -->

  <!-- endinject -->





  @livewireScripts



    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.2.1.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
    <script src="{{ asset('assets/js/active.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    </body>
</html>
