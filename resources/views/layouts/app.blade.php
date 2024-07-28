<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        {{-- <link rel="icon" href="{{ asset('assets/images/ld-logo.png') }}"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/jquery-impromptu.css') }}" rel="stylesheet">
        {{-- <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet"> --}}
        <link rel='stylesheet' href='https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css'>
        <link rel='stylesheet' href='https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css'>
        <link href="{{ asset('assets/css/datepicker.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/staticPart/css/common.css') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4QdyCtd3M8QfeAR4XEfcIrjHw-TRPlJI&loading=async&libraries=places&callback=initAutocomplete" ></script> --}}
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body class="font-sans antialiased">
        @if(Route::currentRouteName() != 'login' && Route::currentRouteName() != 'register')
            <div class="justify-content-end">
                @include('layouts.navigation')
            </div>
        @endif

            <!-- Page Content -->    
        @yield('content')

        @include("layouts.js")
    </body>
</html>
