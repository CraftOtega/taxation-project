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
        <link rel="stylesheet" type="text/css" href="extral/font-awesome.4.7.0.css.font-awesome.min.css">

          <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <!-- Buttons extension CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- PUSH STYLES --}}
     @stack('styles')
     @livewireStyles
    </head>
    <body class="font-sans antialiased">






 {{-- MAIN NAVIGATION BAR --}}
        @include('govt.partials.navbar')

         {{-- SIDEBAR LEFT --}}

            @include('govt.partials.sidebar')


            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


            {{-- MAIN CONTENT --}}

            @yield('content')



                    </div>
                </div>
            </div>


        {{-- MAIN NAVIGATION BAR --}}
        @include('govt.partials.footer')











  @livewireScripts





  @yield('scripts')
  <!-- container-scroller -->
    <!-- plugins:js -->

  <!-- endinject -->


   <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <!-- DataTables JS -->
   <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
   <!-- Buttons extension JS -->
   <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.flash.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>

   <script>


$(document).ready(function(){

$('#example').DataTable({
dom: 'lBfrtip',
buttons: [
 'excel', 'csv', 'pdf', 'copy'
],
"lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
});

});
       </script>
    </body>
</html>
