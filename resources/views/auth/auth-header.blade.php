@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/staticPart/css/auth.css') }}">
    <div class="container">
        <div class="cover">
            @if (Route::currentRouteName() == 'login')
                <div class="front">
                    {{-- <img src="{{ asset('assets/images/frontImg.jpg') }}" alt=""> --}}
                    <img src="https://images.unsplash.com/photo-1607473129014-0afb7ed09c3a?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    {{-- <div class="text">
                        <span class="text-1">Every new friend is a <br> new adventure</span>
                        <span class="text-2">Let's get connected</span>
                    </div> --}}
                </div>
            @elseif(Route::currentRouteName() == 'register')
                <div class="back">
                    {{-- <img src="{{ asset('assets/images/backImg.jpg') }}" alt=""> --}}
                    <img src="https://plus.unsplash.com/premium_photo-1677187301535-b46cec7b2cc8?q=80&w=1523&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    {{-- <div class="text">
                        <span class="text-1">Complete miles of journey <br> with one step</span>
                        <span class="text-2">Let's get started</span>
                    </div> --}}
                </div>
            @endif
        </div>

        @yield('auth-pages')
    </div>
@endsection
