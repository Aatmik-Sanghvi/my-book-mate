@extends('auth.auth-header')
@section('auth-pages')
    <div class="forms">
        <div class="form-content">
            <div class="signup-form">
                <div class="title">Signup</div>
                <form action="{{ route('register-store') }}" method="POST" id="registerFrm">
                    @csrf
                    <div class="input-boxes">
                        <div class="input-box name">
                            <i class="fas fa-user"></i>
                            <input type="text" class="required" placeholder="Enter your name" name="name">
                        </div>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-box email">
                            <i class="fas fa-envelope"></i>
                            <input type="text" class="required" placeholder="Enter your email" name="email">
                        </div>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-box phone_number">
                            <i class="fas fa-phone"></i>
                            <input type="number" class="required" id="phone_number" name="phone_number" placeholder="Enter your phone number">
                        </div>
                        @error('phone_number')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-box address">
                            <i class="fas fa-address-card"></i>
                            <input type="text" class="required" id="address" name="address" placeholder="Enter your address">
                        </div>
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-box city">
                            <i class="fas fa-city"></i>
                            <input type="text" class="required" id="city" name="city" placeholder="Enter your city">
                        </div>
                        @error('city')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-box state">
                            <i class="fas fa-map-marked-alt"></i>
                            <input type="text" class="required" id="state" name="state" placeholder="Enter your state">
                        </div>
                        @error('state')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-box country">
                            <i class="fas fa-globe"></i>
                            <input type="text" class="required" id="country" name="country" placeholder="Enter your country">
                        </div>
                        @error('country')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-box postal_code">
                            <i class="fas fa-envelope"></i>
                            <input type="number" class="required" id="postal_code" name="postal_code" placeholder="Enter your postal code">
                        </div>
                        @error('postal_code')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
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
