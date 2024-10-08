@extends('layouts.sidebar')
@section('main-dashboard-component')
    <div class="container align-item-center mt-2">
        <h3 class="text-color">
            <a href="{{ route('my-books') }}" class="text-color page_header_link">My Books</a>
            < <a href="{{ route('view-books', ['id' => Crypt::encrypt($book->id) ]) }}"
                class="text-color page_header_link @if (Route::currentRouteName() == 'view-books') active @endif">View book</a>
        </h3>
        <hr class="text-color">
        {{-- <div class="text-end">
            <a href="{{ route('edit-books', ['id' => Crypt::encrypt($book->id)]) }}" class="btn btn-primary">Edit books</a>
        </div> --}}
        <div class="card mt-3">
            <div class="card-body">
                {{-- <div class="row"> --}}
                <div class="form-group col-md-6 mt-2">
                    <label for="title" class="text-color">Book Name</label>
                    <p class="active">{{ $book->title }}</p>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <label for="authors" class="text-color">Author</label>
                    <p class="active">{{ $book->authors }}</p>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <label for="isbn" class="text-color">ISBN (Optional)</label>
                    <p class="active">{{ $book->isbn ?? 'NA' }}</p>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <label for="category" class="text-color">Category</label>
                    <p class="active">{{ $book->category ?? 'NA' }}</p>
                </div>
                <div class="form-group col-md-6 mt-2">
                    <label for="book-image" class="text-color">Image</label>
                    <br>
                    <img src="{{ asset($book->image) }}" alt="No book Image"
                            width="100px" height="100px">
                    {{-- @else
                        <p class="active">No image</p>
                    @endif --}}
                </div>
                {{-- <div class="form-group mt-2">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div> --}}
                {{-- </div> --}}
                {{-- </form> --}}
            </div>
        </div>
    </div>
@endsection
