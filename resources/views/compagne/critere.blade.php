@extends('layout')

@section('content')

<center>
<form action="{{ route('compagne.critere',['id'=>request()->id, 'language'=>app()->getLocale()] )}}" method="POST">
@csrf
<div class="card" style="width: 18rem;" >
  <div class="card-body">
    <h5 class="card-title">Les critères pour votre compagne</h5>
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
  </ul>
  
  <button type="submit" class="btn btn-primary" name="btnCreerC">Ajouter le critère</button>
  
</div>
</form>
</center>

@endsection