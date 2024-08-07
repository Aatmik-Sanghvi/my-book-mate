@extends('layouts.sidebar')

@section('main-dashboard-component')
    <div class="container align-item-center my-2">
        <h3 class="text-color">
        <a href="{{ route('my-books') }}" class="text-color page_header_link">My Books</a> < <a href="{{ route('add-books') }}" class="text-color page_header_link @if(Route::currentRouteName() == 'add-books') active @endif">Add book</a>
        </h3>
        <hr class="text-color">
        <div class="my-2">
            <input type="hidden" id="apiKey" value="{{ config('services.google_api.api_key') }}">
            <input type="text" class="form-control" name="search_books" id="search_books" placeholder="Search your book">
            <div id="searched-list">
                <ul class="list-group" id="unordered_List">

                </ul>
            </div>
        </div>
        <hr class="text-color">
        <h2 class="text-center text-color">OR</h2>
        <hr class="text-color">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('store-books') }}" id="frmAddBook" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6 mt-2">
                            <label for="title" class="text-color">Book Name</label>
                            <input class="form-control text-color" type="text" name="title" id="title"
                                placeholder="enter book name">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 mt-2">
                            <label for="authors" class="text-color">Author</label>
                            <input class="form-control text-color" type="text" name="authors" id="authors"
                                placeholder="enter author name">
                            @error('authors')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 mt-2">
                            <label for="isbn" class="text-color">ISBN (Optional)</label>
                            <input class="form-control text-color" type="text" name="isbn" id="isbn"
                                placeholder="enter isbn number">
                        </div>
                        <div class="form-group col-md-6 mt-2">
                            <label for="book-image" class="text-color">Image</label>
                            <input class="form-control" type="file" name="book_images[]" id="book_images" multiple>
                            @error('book_images.*')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @section('js')
    <script src="{{ asset('assets/dynamicPart/js/addBooks.js') }}"></script>
    @stop
@endsection
