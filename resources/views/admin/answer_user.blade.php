@extends('layouts.admin')

@section('title')
BigScreen - Administration
@endsection

@section('content')
    <div class="d-flex align-items-center justify-content-center vh-50">
        <div class="card-body text-white bg-secondary my-3 mb-3 mx-auto rounded " style="max-width: 60rem;">
            {{-- @if($answerer->status(true)||)
            @foreach ($answerers->answerer as $answers) --}}
            <table class="table table-bordered-rounded table-dark table-striped table-hover ">
                <thead>
                    <th>Q°</th>
                    <th>Description</th>
                    <th>Réponses</th>
                    {{-- <th>Utilisateur</th> --}}
                </thead>
                <tbody>
                    @foreach($answers as $answer)
                        <tr>
                            <td>{{$answer->question_id}}</td>
                            <td class="label">{{$answer->question->description}}</td>
                            <td>{{$answer->answers}}</td>
                            {{-- <td>{{$answer->answerers_access_token}}</td> --}}
                        </tr>
                        @endforeach
                </tbody>
            </table>
            {{-- @endforeach     --}}
        </div>
    </div>  
@endsection