@extends('layout')

@section('content')

<center>
<form action="{{route('sujet.Rdimension',['id'=>request()->id, 'language'=>app()->getLocale()] ) }}" method="POST">
@csrf
<div class="card" style="width: 18rem;" >
  <div class="card-body">
    <h5 class="card-title">Rajouter un autre dimension Sujet d'évaluation</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">Titre de dimension</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="titre">
    </div>
    </li>
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">Type</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="type">
</textarea>
    </div>
    </li>
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="number" class="form-control"  aria-describedby="emailHelp" name="nombre">
</textarea>
    </div>
    </li>
  </ul>
  
  <button type="submit" class="btn btn-primary" name="btnCreerC">Ajouter le dimension</button> <br>
  <a href="{{ route('sujet.create',['id'=>request()->id, 'language'=>app()->getLocale()] )}}" class="card-link">{{__('Add a subject') }}</a
</div>
</center>

@endsection