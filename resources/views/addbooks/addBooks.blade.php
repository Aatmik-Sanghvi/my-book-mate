@extends('layouts.sidebar')

@section('main-dashboard-component')
    <div class="container my-2">
        <div class="card mh-100">
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="form-group col-md-6">
                        <label for="book_name">Book Name</label>
                        <input class="form-control" type="text" name="book_name" id="book_name"
                            placeholder="enter book name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="author">Author</label>
                        <input class="form-control" type="text" name="author" id="author"
                            placeholder="enter author name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="isbn">ISBN (optional)</label>
                        <input class="form-control" type="text" name="isbn" id="isbn"
                            placeholder="enter isbn number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="book-image">Image</label>
                        <input class="form-control" type="file" name="book-image" id="book-image">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
