@extends('layouts.sidebar')
@section('main-dashboard-component')
    <div class="container align-item-center mt-2">
        <h3 class="text-color">
            <a href="{{ route('my-books') }}" class="text-color page_header_link">My Books</a>
            < <a href="{{ route('view-books', ['id' => Crypt::encrypt($book->id)]) }}"
                class="text-color page_header_link @if (Route::currentRouteName() == 'edit-books') active @endif">Edit book</a>
        </h3>
        <hr class="text-color">
        <div class="card mt-3">
            <div class="card-body">
                <form action="{{ route('update-books',['id'=>Crypt::encrypt($book->id)]) }}" id="frmAddBook" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="row"> --}}
                        <div class="form-group col-md-6 mt-2">
                            <label for="title" class="text-color">Book Name</label>
                            <input class="form-control active" type="text" name="title" id="title"
                                placeholder="enter book name" value="{{ $book->title }}">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 mt-2">
                            <label for="authors" class="text-color">Author</label>
                            <input class="form-control active" type="text" name="authors" id="authors"
                                placeholder="enter author name" value="{{ $book->authors }}">
                            @error('authors')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 mt-2">
                            <label for="isbn" class="text-color">ISBN (Optional)</label>
                            <input class="form-control active" type="text" name="isbn" id="isbn"
                                placeholder="enter author name" value="{{ $book->isbn ?? 'NA' }}">
                        </div>
                        <div class="form-group col-md-6 mt-2">
                            <label for="book-image" class="text-color">Image</label>
                            @foreach ($book->bookImages as $item)
                                <img src="{{ asset($item->image_path) }}" alt="book_image_{{ $item->id }}"
                                    width="100px" height="100px">
                            @endforeach
                            <input class="form-control" type="file" name="book_images[]" id="book_images" accept="images.*" multiple>
                            @error('book_images.*')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <a href="{{ route('my-books') }}" class="btn btn-primary">Cancel</a>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    {{-- </div> --}}
                </form>
            </div>
        </div>
    </div>
@endsection
