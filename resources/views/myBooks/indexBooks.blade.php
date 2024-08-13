@extends('layouts.sidebar')
@section('main-dashboard-component')
<div class="container">
    <h2 class="text-color">My Books</h2>
    <div class="text-end">
      <a href="{{ route('add-books') }}" class="btn btn-primary">Add books</a>
    </div>
    <br>
    <div class="container-fluid pb-4">
      <table class="table display responsive nowrap data-table sp-table mb-0" id="data-table" style="width:100%">
          <thead>
              <tr>
                  <th class="text-color text-center">Book Id</th>
                  <th class="text-color text-center">Title</th>
                  <th class="text-color text-center">Authors</th>
                  <th class="text-color text-center">ISBN</th>
                  {{-- <th class="text-color">Images</th> --}}
                  <th class="text-color text-center" style="width: 150px;text-align: right;">Action</th>
              </tr>
          </thead>
          <tbody>
          </tbody>
      </table>
</div>
</div>
@section('js')
<script src="{{ asset('assets/dynamicPart/js/myBooks.js') }}"></script>
@stop
@endsection