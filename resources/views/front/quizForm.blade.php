@extends('layouts.front')

@section('title')
BigScreen - Questionnnaire
@endsection

@section('content')
<form class ="bg-secondary py-3 mt-3 rounded">
  @csrf
  @foreach ($questions as $question)
  <div>
      <p class="text-justify">{{ $question->title }}</p>
  </div>
   @if ($question->type=='B')
    <div>
        <label for="{{ $question->id }}" placeholder="Default input">{{ $question->description }}</label>
        <select name="{{ $question->id }}" id="{{ $question->id }}" class="form-select " aria-label="Floating label select example">
            @foreach($question->choices as $choice)
            <option value="{{$choice}}">
              {{$choice}}
            </option>
            @endforeach
        </select>
      </div>
  @elseif($question->type=='B')
    <div>
        <label for="{{ $question->id }}" class="form-label">{{ $question->description }}</label>
        <input type="text" name="{{ $question->id }}" id="{{ $question->id }}" class="form-control">
    </div>
  @else
  <div>
    <p>{{ $question->description }}</p>
    @for ($i = 1; $i<=5; $i++)
      <div class="form-check form-check-inline">
      <label for="{{ $question->id }}">{{$i}}</label>
      <input type="radio" id="{{ $question->id }}"
       name="{{ $question->id }}" value="{{$i}}">
    </div>
    @endfor

  </div>
  @endif

  @endforeach
  <br>
     <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-light btn-lg btn-block  ">Finaliser</button>
     </div>dset>
  </form>  
@endsection
