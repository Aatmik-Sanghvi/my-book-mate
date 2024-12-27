@extends('layouts.sidebar')
@section('main-dashboard-component')
    <div class="container">
        <h2 class="text-color">All Books</h2>
        <hr class="text-color">

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p class="mt-2">
                <b>Note: </b>It looks like there are no books available in your city try updating your address in profile.<br>
                But imagine the possibilities when your friends, family, and community join in! Head over to the referral
                section and start inviting those you know. Not only will you help grow the collection in your area, but
                you'll also unlock exciting rewards. The more people you invite, the richer the experience becomes for
                everyone—starting with you!
            </p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>



        {{-- <div class="text-end">
            <a href="{{ route('add-books') }}" class="btn btn-primary">Add books</a>
        </div> --}}
        <br>
        <div class="container-fluid pb-4">
            <table class="inputs mb-2">
                <tbody>
                    <tr>
                        <td>Categories:</td>
                        <td>
                            <select type="text" class="form-control" id="category" name="category">
                                <option value="">Select category</option>
                                <option value="fiction">Fiction</option>
                                <option value="non fiction">Non-fiction</option>
                                <option value="science">Science</option>
                                <option value="technology">Technology</option>
                                <option value="history">History</option>
                                <option value="philosophy">Philosophy</option>
                                <option value="art">Art</option>
                                <option value="biography">Biography</option>
                                <option value="fantasy">Fantasy</option>
                                <option value="mystery">Mystery</option>
                                <option value="education">Education</option>
                                <option value="business">Business</option>
                                <option value="religion">Religion</option>
                                <option value="health">Health</option>
                                <option value="travel">Travel</option>
                                <option value="cooking">Cooking</option>
                                <option value="sports">Sports</option>
                                <option value="comics">Comics</option>
                                <option value="self help">Self Help</option>
                            </select>
                        </td>
                        <td><button id="clear" class="btn btn-primary ms-2" hidden>Clear</button></td>
                    </tr>
                </tbody>
            </table>
            <table class="table display responsive nowrap data-table sp-table mb-0" id="data-table" style="width:100%"
                data-page="borrowed-books">
                <thead>
                    <tr>
                        {{-- <th class="text-color text-center">Book Id</th> --}}
                        <th class="text-color text-center">Title</th>
                        <th class="text-color text-center">Authors</th>
                        {{-- <th class="text-color text-center">ISBN</th> --}}
                        <th class="text-color text-center">Category</th>
                        <th class="text-color text-center">Images</th>
                        <th class="text-color text-center" style="width: 150px;text-align: right;">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@section('js')
    <script src="{{ asset('assets/backend/js/books.js') }}"></script>
@stop
@endsection
