@extends('layouts.front')

@section('title')
BigScreen - Questionnnaire
@endsection

@section('content')
<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="card text-white bg-primary my-3 mb-3 mx-auto " style="max-width: 30rem;">
        <div class="card-header bg-primary">
            <h1 class ="pb-2">BIGSCREEN</h1>
            {{-- <img src="{{asset('img/bigscreen_logo.png')}}" alt="logo bigscreen"> --}}
        <div class="card-body p-0">
        <h4 class="card-title pb-2">Merci</h4>
        <p class="font-italic"> 
            Toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce à
            votre investissement, nous vous préparons une application toujours plus
            facile à utiliser, seul ou en famille.
            Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez
            cette adresse:
        </p>
    {{-- <a href="http:{{url("poll/".$poll_url)}}">http:{{url("poll/".$poll_url)}}</a> --}}
    </div>
  </div>
</div>   
</main>
@endsection