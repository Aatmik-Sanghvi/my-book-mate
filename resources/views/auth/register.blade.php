@extends('auth.auth-header')
@section('auth-pages')
    <div class="forms">
        <div class="form-content">
            <div class="signup-form">
                <div class="title">Signup</div>
                <form action="{{ route('register-store') }}" method="POST">
                    @csrf
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Enter your name" name="name">
                        </div>
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="text" placeholder="Enter your email" name="email">
                        </div>
                        <div class="input-box">
                            <i class="fas fa-phone"></i>
                            <input type="number" id="phone_number" name="phone_number" placeholder="Enter your phone number">
                        </div>
                        <div class="input-box">
                            <i class="fas fa-address-card"></i>
                            <input type="address" id="address" name="address" placeholder="Enter your address">
                        </div>
                        <div class="button input-box">
                            <input type="submit" value="Submit">
                        </div>
                        <div class="text sign-up-text">Already have an account? <a href="{{ route('login') }}"
                                class="auth-redirect-link">Login now</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
