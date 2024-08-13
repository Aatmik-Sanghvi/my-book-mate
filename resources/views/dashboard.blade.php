@extends('layouts.sidebar')

@section('main-dashboard-component')
<div class="container align-item-center my-2">
    <hr class="text-color">
    <h2 class="text-color">Dashboard</h2>
    <div style="text-align: center;"> <!-- Adjust width as needed -->
        <canvas id="myChart"></canvas>
    </div>
</div>
@section('js')
    <script src="{{ asset('assets/dynamicPart/js/dashboard.js') }}"></script>
@stop
@endsection