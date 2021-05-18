@extends('layout')

@section('content')



<center>
<form action="{{route('sujet.voir',['id'=>request()->id,'language'=>app()->getLocale()]) }}" method="POST">
@csrf
<div>
      <select class="form-select" aria-label="Default select example" name="ssujet">
         @foreach ((\App\Sujet::all()) as $sujet)
        <option value="{{$sujet->id}}">{{$sujet->titre}}</option>
        @endforeach
        </select>
      </div><br> <br>
      <button type="submit" class="btn btn-primary" name="btnaffecteS">Ajouter le sujet</button>
      </form> 
<br><br>

</div>

</center>

@endsection