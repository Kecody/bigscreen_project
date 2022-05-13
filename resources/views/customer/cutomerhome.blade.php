@extends('layouts.app')

@section('title')
    BigScreen - CUSTOMER
@endsection

@section('content')
<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="card text-white bg-secondary p-2 my-3 mb-3 mx-auto " style="max-width: 30rem;">
        <div class="bg-dark m-2 p-3 rounded">
        <div class="card-header bg-dark">
            <img class ="mx-auto mb-4 mt-3 p-3 rounded" src="{{asset('img/dev_build_2.png')}}" alt="logo bigscreen">
        <hr>
        <div class="card-body p-0">
            <img class ="mx-auto mb-4 mt-3 p-3 rounded" src="{{asset('img/logo_bigscreen.png')}}" alt="logo bigscreen">
        <p class="font-italic"> 
            Cette partie est en construction et sera bientôt disponible !!!!
            Soyez patient 
        </p>
    {{-- <a href="http:{{url("poll/".$poll_url)}}">http:{{url("poll/".$poll_url)}}</a> --}}
    </div>
    </div>
  </div>
</div>   
</main>
@endsection