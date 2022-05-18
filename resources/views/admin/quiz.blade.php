@extends('layouts.admin')

@section('title')
BigScreen - Administration
@endsection

@section('content')
<div class="d-flex align-items-center justify-content-center vh-50">
    <div class="card-body text-white bg-secondary my-3 mb-3 mx-auto rounded " style="max-width: 60rem;">
            <table class="table table-bordered-rounded table-dark table-striped table-hover ">
                <thead>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Numéro</th>
                </thead>
                @foreach($quiz as $questionary)
                <tbody>
                        <tr>
                            <td>{{$questionary->title}}</td>
                            <td class="label">{{$questionary->description}}</td>
                            <td class="label">{{$questionary->id}}</td>
                        </tr>
                </tbody>
                @endforeach
            </table>    
        </div>
    </div>  
@endsection