@extends('layouts.admin')

@section('title')
BigScreen - Administration
@endsection

@section('content')
    <div class= " d-flex row align-items-center justify-content-center card-body text-white bg-primary   mx-auto vh-100">
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
@endsection
