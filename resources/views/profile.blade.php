@extends('layouts.sidebar')

@section('main-dashboard-component')
    <div class="container align-item-center my-2">
        <hr class="text-color">
        <h2 class="text-color">Profile</h2>
        <div class="card mh-100">
            <div class="card-body">
                <form action="{{ route('profile.update',['id'=>$user->id]) }}" method="POST" id="frmProfile">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6 mt-2">
                            <label for="name" class="text-color">Name</label>
                            <input type="text" class="form-control text-color required" placeholder="Enter your name" name="name" value="{{ $user->name }}">
                        </div>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6 mt-2">
                            {{-- <i class="fas fa-envelope"></i> --}}
                            <label for="email" class="text-color">Email</label>
                            <input type="text" class="form-control text-color required" placeholder="Enter your email" name="email" value="{{ $user->email }}">
                        </div>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6 mt-2">
                            {{-- <i class="fas fa-phone"></i> --}}
                            <label for="phone_number" class="text-color">Phone Number</label>
                            <input type="number" class="form-control text-color required" id="phone_number" name="phone_number" placeholder="Enter your phone number" value="{{ $user->phone_number }}">
                        </div>
                        @error('phone_number')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6 mt-2">
                            {{-- <i class="fas fa-address-card"></i> --}}
                            <label for="address" class="text-color">Address</label>
                            <input type="text" class="form-control text-color required" id="address" name="address" placeholder="Enter your address" value="{{ $user->address }}">
                        </div>
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6 mt-2">
                            {{-- <i class="fas fa-city"></i> --}}
                            <label for="city" class="text-color">City</label>
                            <input type="text" class="form-control text-color required" id="city" name="city" placeholder="Enter your city" value="{{ $user->city }}">
                        </div>
                        @error('city')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6 mt-2">
                            {{-- <i class="fas fa-map-marked-alt"></i> --}}
                            <label for="state" class="text-color">State</label>
                            <input type="text" class="form-control text-color required" id="state" name="state" placeholder="Enter your state" value="{{ $user->state }}">
                        </div>
                        @error('state')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6 mt-2">
                            <label for="country" class="text-color">Country</label>
                            <input type="text" class="form-control text-color required" id="country" name="country" placeholder="Enter your country" value="{{ $user->country }}">
                        </div>
                        @error('country')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6 mt-2">
                            {{-- <i class="fas fa-envelope"></i> --}}
                            <label for="postal_code" class="text-color">Postal Code</label>
                            <input type="number" class="form-control text-color required" id="postal_code" name="postal_code" placeholder="Enter your postal code" value="{{ $user->postal_code }}">
                        </div>
                        @error('postal_code')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group mt-2">
                            {{-- <input type="submit" value="Submit"> --}}
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @section('js')
    <script src="{{ asset('assets/staticPart/js/auth.js') }}"></script>
    <script src="{{ asset('assets/dynamicPart/js/profile.js') }}"></script>
    @stop
@endsection