@extends('layout')

@section('content')
@php
use Illuminate\Http\Request;
@endphp


<center>
<form action="{{route('compagne.voir',['language'=>app()->getLocale()])}}" method="POST">
@csrf
<div>
      <select class="form-select" aria-label="Default select example" name="organisation">
         @foreach ((\App\Organisation::all()) as $organisation)
        <option  value="{{$organisation->id}}">{{$organisation->nom}}</option>
        @endforeach
        </select>
      </div>
      </form> 
<br><br>

<input type="submit" name="answer" value="afficher les compagnes" onclick="showDiv()" />

<div id="compagne" style="display:none;">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">date Reception</th>
      <th scope="col">Date Envoi</th>
      <th scope="col">dernier date evaluation</th>
      <th scope="col">numero de compagne</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach((\App\Compagne::where('id_Organisation',$organisation->id)->get()) as $compagne)
    <tr>
      <th scope="row">1</th>
      <td>{{$compagne->dateRecepttion}}</td>
      <td>{{$compagne->dateEnvoie}}</td>
      <td>{{$compagne->dernierDelaiEvaluation}}</td>
      <td>{{$compagne->numCompagne}}</td>
      <td> <a href="{{ route('sujet.voir',['id'=>$compagne->id_Compagne, 'language'=>app()->getLocale()] )}}" class="card-link">Ajouter Sujet</a></td>
      <td> <a href="{{ route('compagne.critere',['id'=>$compagne->id_Compagne, 'language'=>app()->getLocale()] )}}" class="card-link">Ajouter Critère</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<script>
function showDiv() {
   document.getElementById('compagne').style.display = "block";
}
</script>
</center>

@endsection