@extends('layouts.sidebar')

@section('main-dashboard-component')
<div class="container my-2">
    <hr class="text-color">
    <h2 class="text-color">Dashboard</h2>
    <div> <!-- Adjust width as needed -->
        <canvas id="myChart"></canvas>
    </div>
</div>
@section('js')
    <script src="{{ asset('assets/backend/js/dashboard.js') }}"></script>
@stop
@endsection