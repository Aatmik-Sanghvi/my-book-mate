@extends('layouts.sidebar')
@section('main-dashboard-component')
    <div class="container align-item-center mt-2">
        <h3 class="text-color">
            <a href="{{ route('all-books') }}" class="text-color page_header_link">All Books</a>
            < <a href="{{ route('borrow-books', ['id' => Crypt::encrypt($book->id) ]) }}"
                class="text-color page_header_link @if (Route::currentRouteName() == 'borrow-books') active @endif">Borrow book</a>
        </h3>
        <hr class="text-color">
        <div class="card mt-3">
            <div class="card-body">
                <form action="{{ route('request-message') }}" id="frmBorrowBook" method="POST">
                    @csrf
                    <h3 class="text-color">Request</h3>
                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                    <textarea class="form-control" name="requestMessage" id="requestMessage" cols="30" rows="10" placeholder="Ask where to pick up the book and how long you can keep it..."></textarea>
                    @error('requestMessage')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group mt-2">
                        <button class="btn btn-primary mt-2" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    <div>
    @section('js')
        <script src="{{ asset('assets/backend/js/borrowBooks.js') }}"></script>
    @endsection
@endsection