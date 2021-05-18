@extends('layout')

@section('content')

<center>
<form action="{{route('sujet.create',['id'=>request()->id, 'language'=>app()->getLocale(),'idC'=>request()->idC] ) }}" method="POST">
@csrf
<div class="card" style="width: 18rem;" >
  <div class="card-body">
    <h5 class="card-title">Sujet d'évaluation</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">Titre de sujet</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="titre">
    </div>
    </li>
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <textarea class="form-control" name="description" rows="6" cols="70">
</textarea>
    </div>
    </li>
  </ul>
  
  <button type="submit" class="btn btn-primary" name="btnCreerC">Ajouter le sujet</button>
  
</div>
</center>

@endsection