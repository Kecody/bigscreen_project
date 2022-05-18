@extends('layouts.admin')

@section('title')
BigScreen - Administration
@endsection

@push('head')
<!-- Scripts -->
<script>   
    let graphData = ;
</script>

@endpush

@section('content')
    <div class= " d-flex row align-items-center justify-content-center card-body text-white mx-auto vh-100">
            <div class =" d-flex col-4 graph bg-warning m-2 ">
                <canvas class ="w-100 m-2" id="pie-6"></canvas>
            </div>
            <div class =" d-flex col-4 graph bg-warning m-2 ">
                <canvas class =" w-100 m-2" id="pie-7"></canvas>
            </div>
            <div class ="d-flex col-4 graph bg-warning m-2">
                <canvas class =" w-100 m-2" id="pie-10"></canvas>
            </div>
            <div class =" d-flex col-4 graph bg-warning m-2">
                <canvas class ="w-100 m-2" id="radar"></canvas>
            </div>
    </div>
   
    {{-- <canvas id="myChart" width="400" height="400"></canvas> --}}

    
@endsection
