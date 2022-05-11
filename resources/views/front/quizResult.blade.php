@extends('layouts.front')

@section('title')
BigScreen - Questionnnaire
@endsection

@section('content')
<div class="text-center mx-auto h5 mb-2">
    <h1 class = "mb-3">BIGSCREEN</h1>
    <p id="intro" >Vous trouverez ci-dessous les réponses que vous avez apportées à notre sondage le </p>
</div>
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
@endsection