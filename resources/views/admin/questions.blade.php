@extends('layouts.admin')

@section('title')
BigScreen - Administration
@endsection

@section('content')
    <div class="d-flex align-items-center justify-content-center vh-50">
        <div class="card-body text-white bg-secondary my-3 mb-3 mx-auto rounded " style="max-width: 60rem;">
            <table class="table table-bordered-rounded table-dark table-striped table-hover ">
                <thead>
                    <th class ="table-dark">Q°</th>
                    <th>Description</th>
                    <th>Type</th>
                </thead>
                <tbody>
                    @foreach ($questions as $question)
                        <tr>
                            <td class ="table-dark">{{$question['nth']}}</td>
                            <td class="label">{{$question['description']}}</td>
                            <td>{{$question['type']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>    
        </div>
    </div>  
@endsection