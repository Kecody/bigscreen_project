@extends('layouts.front')

@section('title')
BigScreen - Questionnnaire
@endsection

@section('content')
<div class="text-center bg-secondary mx-auto h5 mt-3 mb-2 py-3 rounded">
    <div class ="bg-dark p-3 rounded">
        <img class ="mx-auto mb-4 mt-3" src="{{asset('img/logo_bigscreen.png')}}" alt="logo bigscreen">
        <p id="intro" >Vous trouverez ci-dessous les réponses que vous avez apportées à notre sondage le </p>
        <div class="d-flex align-items-center justify-content-center vh-50">
            <div class="card-body text-white bg-primary my-3 mb-3 mx-auto " style="max-width: 60rem;">
                {{-- <h5>{{$answers[0]->created_at->isoFormat('DD.mm.YYYY à HH.mm')}}</h5> --}}
                <table class = "table">
                    <thead>
                        <th>Numéro</th>
                        <th>Question</th>
                        <th>Réponse</th>
                    </thead>
                    {{-- @foreach ($answers as $answer)
                    <tbody>
                            <tr>
                                <td>{{ $questions[$answer->question_id-1]->title }}</td>
                                <td class="label">{{ $questions[$answer->question_id-1]->body }}</td>
                                <td>{{$answer->answer}}</td>
                            </tr>
                    </tbody>
                </table>
                @endforeach     --}}
            </div>
        </div>
    </div>
</div>       
@endsection

         