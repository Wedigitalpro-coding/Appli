@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('users') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.user', app()->getLocale()) }}">
                        @csrf

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Organization') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" aria-label="Default select example" name="organisation">
                            @foreach ((\App\Organisation::all()) as $organisation)
                            <option  value="{{$organisation->id}}">{{$organisation->nom}}</option>
                            @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4" >
                                <button type="submit" class="btn btn-primary" > 
                                     show users
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
