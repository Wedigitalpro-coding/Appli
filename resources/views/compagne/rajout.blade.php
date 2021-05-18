@extends('layout')

@section('content')

<center>
<form action="{{route('compagne.rajout',['id'=>request()->id, 'language'=>app()->getLocale()] ) }}" method="POST">
@csrf
<div class="card" style="width: 18rem;" >
  <div class="card-body">
    <h5 class="card-title">{{__('add other companion') }}</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">{{__('Send Date') }}</label>
    <input type="date" class="form-control"  aria-describedby="emailHelp" name="dateEnvoie">
    </div>
    </li>
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">{{__('Date of receipt') }}</label>
    <input type="date" class="form-control"  aria-describedby="emailHelp" name="dateReception">
    </div>
    </li>
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">{{__('deadline for evaluation') }}</label>
    <input type="date" class="form-control"  aria-describedby="emailHelp" name="dernierDateEvaluation">
    </div>
    </li>
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">{{__('Companion number') }}</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="numCompagne">
    </div>
    </li>
    <li class="list-group-item">
    <div>
   
 </div>
    </li>
  </ul>
  <button type="submit" class="btn btn-primary" name="btnCreerC">{{__('Add companion') }}</button>
  <div class="card-body">
    
    <a href="{{ route('sujet.create',['id'=>request()->id, 'language'=>app()->getLocale(), 'idC'=>request()->idC] )}}" class="card-link">{{__('Add a subject') }}</a>
  </div>
</div>
</center>

@endsection