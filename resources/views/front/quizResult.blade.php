@extends('layouts.front')

@section('title')
BigScreen - Questionnnaire
@endsection

@section('content')
<div class="text-center bg-secondary mx-auto h5 mb-2 py-3">
    <div class ="bg-dark p-3 rounded">
        <img class ="mx-auto mb-4 mt-3" src="{{asset('img/logo_bigscreen.png')}}" alt="logo bigscreen">
        <p id="intro" >Vous trouverez ci-dessous les réponses que vous avez apportées à notre sondage le </p>
        <div class="d-flex align-items-center justify-content-center vh-50">
            <div class="card-body text-white bg-primary my-3 mb-3 mx-auto " style="max-width: 60rem;">
                <table>
                    <thead>
                        <th>Question</th>
                        <th>Réponse</th>
                    </thead>
                    <tbody>
                            <tr>
                                <td></td>
                                <td class="label"></td>
                                <td></td>
                            </tr>
                    </tbody>
                </table>    
            </div>
        </div>
    </div>
</div>       
@endsection