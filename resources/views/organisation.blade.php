@extends('layouts.app')

@section('content')

<div class="card mb-3" style="max-width: 540px;" >
  <div class="row g-0">
    <div class="col-md-4" >     <img src="https://global-switzerland.ch/wp-content/uploads/2017/10/global-switzerland_entreprise_symbole.png">

    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" style="color:#8B008B;" >{{__('New Organization') }}</h5>
        <p class="card-text">{{__('This form will allow you to create the organization you wish evaluate') }}</p> <br>
            <form action="{{ route('organisation', app()->getLocale()) }}" method="POST">
                 @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{__('Name') }}</label>
                    <input type="text" class="form-control @error('nom') is-invalid @enderror"  aria-describedby="emailHelp" name="nom">
                 @error('nom')
                <div class="invalid-feedback">
                  {{ $errors->first('nom') }}
                  </div>
                  @enderror
                  </div>
               
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">{{__('field') }}</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="domaine">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">{{__('Speciality') }}</label>
                    <input type="text" class="form-control @error('specialite') is-invalid @enderror" id="exampleInputPassword1" name="specialite">
                    @error('specialite')
                <div class="invalid-feedback">
                  {{ $errors->first('specialite') }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">{{__('address') }}</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="adresse">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">{{__('Number of departements') }}</label>
                    <input type="text" class="form-control @error('nbrDepartement') is-invalid @enderror" id="exampleInputPassword1" name="nbrDepartement">
                    @error('nbrDepartement')
                <div class="invalid-feedback">
                  {{ $errors->first('nbrDepartement') }}
                  </div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary" name="btnCreer">{{__('Create') }}</button>
            </form>
            
            <br>
      </div>

      
    </div>
  </div>
</div>

@endsection


