@extends('user.accederQuestionnaire')

@section('content')
@php
use Illuminate\Http\Request;
@endphp


<center>
    <br><br><br>
    <h1>Les campagnes</h1>
    <form method="POST" action="{{ route('user.questionnaire1', app()->getLocale()) }}">
              @csrf
    <ul class="list-group">
    @foreach((\App\Compagne::where('id_Organisation','131')->get()) as $compagne)
      <li class="list-group-item list-group-item-danger" name="compagne" value="{{$compagne->id_Compagne}}"><a href="{{ route('user.sujet',['idC'=>request()->compagne, 'language'=>app()->getLocale()] )}}">{{$compagne->numCompagne}}</a></li>
    @endforeach
    </ul>
    </form>
    <br><br>


</center>

@endsection