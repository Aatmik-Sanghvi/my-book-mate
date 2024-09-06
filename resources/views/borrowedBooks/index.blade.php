@extends('layouts.sidebar')
@section('main-dashboard-component')
    <div class="container">
        <h2 class="text-color">All Books</h2>
        <hr class="text-color">
        <p class="text-color" id="no-books" hidden><b>Note: </b>It looks like there are no books available in your city yet. But imagine the possibilities when your
        friends, family, and community join in! Head over to the referral section and start inviting those you know. Not
        only will you help grow the collection in your area, but you'll also unlock exciting rewards. The more people
        you invite, the richer the experience becomes for everyone—starting with you!</p>
        
        {{-- <div class="text-end">
            <a href="{{ route('add-books') }}" class="btn btn-primary">Add books</a>
        </div> --}}
        <br>
        <div class="container-fluid pb-4">
            <table class="table display responsive nowrap data-table sp-table mb-0" id="data-table" style="width:100%"
                data-page="borrowed-books">
                <thead>
                    <tr>
                        {{-- <th class="text-color text-center">Book Id</th> --}}
                        <th class="text-color text-center">Title</th>
                        <th class="text-color text-center">Authors</th>
                        <th class="text-color text-center">ISBN</th>
                        {{-- <th class="text-color text-center">Images</th> --}}
                        <th class="text-color text-center" style="width: 150px;text-align: right;">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@section('js')
    <script src="{{ asset('assets/dynamicPart/js/books.js') }}"></script>
@stop
@endsection
