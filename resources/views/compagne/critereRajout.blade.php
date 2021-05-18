@extends('layout')

@section('content')

<center>
<form action="{{ route('compagne.critereRajout',['id'=>request()->id, 'language'=>app()->getLocale(),'idC'=>request()->idC] )}}" method="POST">
@csrf
<div class="card" style="width: 18rem;" >
  <div class="card-body">
    <h5 class="card-title">Ajouter un autre critère</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">Titre de critère</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="titre">
    </div>
    </li>
    <li class="list-group-item">    
    </li>
  </ul> <br>
  <button type="submit" class="btn btn-primary" name="btnCreerC">Ajouter le critère</button><br><br>
  <a href="{{ route('compagne.proposition',['id'=>request()->id, 'language'=>app()->getLocale(), 'idC'=>request()->idC] )}}" class="card-link">ajouter propositions</a>
</div>
</form>
</center>

@endsection