@extends('auth.auth-header')
@section('auth-pages')
    <div class="forms">
        <div class="form-content">
            <div class="login-form">
                <div class="title">Login</div>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="text" placeholder="Enter your email" name="email">
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Enter your password" name="password">
                        </div>
                        <div class="text forgot-pass"><a href="{{ route('password.request') }}">Forgot password?</a></div>
                        <div class="button input-box">
                            <input type="submit" value="Submit">
                        </div>
                        <p class="text-center">or</p>
                        <div class="text-center">
                            <a href="{{ route('signin_google') }}" type="button" class="login-with-google-btn">
                                Sign in with Google
                            </a>
                        </div>
                        {{-- --------------------------------------REGISTER IS DELETED---------------------------- --}}
                        {{-- <div class="text sign-up-text">Don't have an account? <a href="{{ route('register') }}"
                                class="auth-redirect-link">Signup
                                now</a></div> --}}
                        {{-- -------------------------------------------------------------------------------------- --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
    @section('js')
    <script src="{{ asset('assets/frontend/js/auth.js') }}"></script>
    @stop
@endsection
