@extends('layout')

@section('content')

<center>
<form action="{{ route('compagne.proposition',['id'=>request()->id, 'language'=>app()->getLocale(),'idC'=>request()->idC] )}}" method="POST">
@csrf
<div class="card" style="width: 18rem;" >
  <div class="card-body">
    <h5 class="card-title">Les proposition pour vos critères</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">Propostion 1</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="p1">
    </div>
    </li>
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">Propostion 2</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="p2">
    </div>
    </li>
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">Propostion 3</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="p3">
    </div>
    </li>
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">Propostion 4</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="p4">
    </div>
    </li>
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">Propostion 5</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="p5">
    </div>
    </li>
  </ul>
  
  <button type="submit" class="btn btn-primary" name="btnCreerC">Ajouter les propositions</button>
  
</div>
</form>
</center>

@endsection