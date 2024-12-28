@extends('layouts.sidebar')

@section('main-dashboard-component')
    <style>
        /* .img-thumbnail:hover{
           content: url('assets/images/image_icon.jpg');
           object-fit: contain;
           transform: scale(0.5);
        } */
    </style>
    <div class="container align-item-center my-2">
        <hr class="text-color">
        <h2 class="text-color">Profile</h2>
        <div class="card mh-100">
            <div class="card-body">
                <form action="{{ route('profile.update', ['id' => $user->id]) }}" method="POST" id="frmProfile"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="form-group col-md-12 d-flex flex-wrap justify-content-center">
                            {{-- <label for="profile_photo" class="text-color">Profile Photo</label> --}}
                            @if ($user->profile_photo)
                                <img src="{{ Storage::disk('s3')->url($user->profile_photo) }}" alt="Profile Photo"
                                    class="img-thumbnail mb-2 changeImg" style="width: 100px; height: 98px; border-radius: 50%;">
                            @else
                                <img src="{{ asset('assets/images/dummy_profile.png') }}" alt="Default Profile Photo"
                                    class="img-thumbnail mb-2 changeImg" style="width: 100px; height: 98px; border-radius: 50%;">
                            @endif
                            <input type="file" class="form-control text-color" id="profile_photo" name="profile_photo" hidden accept="image/*">
                        </div>

                        @error('profile_photo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 mt-2">
                            <label for="name" class="text-color">Name</label>
                            <input type="text" class="form-control text-color required" placeholder="Enter your name"
                                name="name" value="{{ $user->name }}">
                        </div>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6 mt-2">
                            <label for="email" class="text-color">Email</label>
                            <input type="text" class="form-control text-color required" placeholder="Enter your email"
                                name="email" value="{{ $user->email }}">
                        </div>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6 mt-2">
                            <label for="phone_number" class="text-color">Phone Number</label>
                            <input type="number" class="form-control text-color required" id="phone_number"
                                name="phone_number" placeholder="Enter your phone number" value="{{ $user->phone_number }}">
                        </div>
                        @error('phone_number')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6 mt-2">
                            <label for="address" class="text-color">Address</label>
                            <input type="text" class="form-control text-color required" id="address" name="address"
                                placeholder="Enter your address" value="{{ $user->address }}">
                        </div>
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6 mt-2">
                            <label for="city" class="text-color">City</label>
                            <input type="text" class="form-control text-color readonly-color" id="city"
                                name="city" placeholder="Enter your city" value="Ahmedabad" readonly>
                        </div>
                        @error('city')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6 mt-2">
                            <label for="state" class="text-color">State</label>
                            <input type="text" class="form-control text-color readonly-color" id="state"
                                name="state" placeholder="Enter your state" value="Gujarat" readonly>
                        </div>
                        @error('state')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6 mt-2">
                            <label for="country" class="text-color">Country</label>
                            <input type="text" class="form-control text-color readonly-color" id="country"
                                name="country" placeholder="Enter your country" value="India" readonly>
                        </div>
                        @error('country')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group col-md-6 mt-2">
                            <label for="postal_code" class="text-color">Postal Code</label>
                            <input type="number" class="form-control text-color required" id="postal_code"
                                name="postal_code" placeholder="Enter your postal code" value="{{ $user->postal_code }}">
                        </div>
                        @error('postal_code')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        {{-- <div class="form-group col-md-6 mt-2">
                            <label for="profile_photo" class="text-color">Profile Photo</label>
                            @if ($user->profile_photo && file_exists(public_path('storage/profile_photos/' . $user->profile_photo)))
                                <img src="{{ asset('storage/profile_photos/' . $user->profile_photo) }}"
                                    alt="Profile Photo" class="img-thumbnail mb-2" style="max-width: 150px;">
                            @else
                                <img src="{{ asset('default-profile.png') }}" alt="Default Profile Photo"
                                    class="img-thumbnail mb-2" style="max-width: 150px;">
                            @endif
                            <input type="file" class="form-control text-color" id="profile_photo"
                                name="profile_photo">
                        </div>

                        @error('profile_photo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                        <div class="form-group mt-2">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@section('js')
    <script>
        var oldFile = "{{ $user->profile_photo }}";
    </script>
    <script src="{{ asset('assets/frontend/js/auth.js') }}"></script>
    <script src="{{ asset('assets/backend/js/profile.js') }}"></script>
@stop
@endsection
