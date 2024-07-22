@extends('auth.auth-header')
@section('auth-pages')
    <div class="forms">
        <div class="form-content">
            <div class="login-form">
                <div class="title">Login</div>
                <form action="{{ route('login') }}" method="POST">
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="text" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Enter your password" required>
                        </div>
                        <div class="text forgot-pass"><a href="#">Forgot password?</a></div>
                        <div class="button input-box">
                            <input type="submit" value="Submit">
                        </div>
                        <div class="text sign-up-text">Don't have an account? <a href="{{ route('register') }}" class="auth-redirect-link">Signup
                                now</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/staticPart/js/auth.js') }}"></script>
    </div>
@endsection
