<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="{{ asset('assets/images/ld-logo.png') }}">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/jquery-impromptu.css') }}" rel="stylesheet">
        {{-- <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet"> --}}
        <link rel='stylesheet' href='https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css'>
        <link rel='stylesheet' href='https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css'>
        <link href="{{ asset('assets/css/datepicker.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="justify-content-end">
            @include('layouts.navigation')
        </div>

            <!-- Page Content -->    
        @yield('content')

        </div>
        @include("layouts.js")
    </body>
</html>
