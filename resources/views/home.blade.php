@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            <ul class="navbar-nav mr-auto">
                    <div class="content" id="app">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('user.user', app()->getLocale()) }}">{{__('New Survey') }}</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="{{ route('sujet.create', app()->getLocale()) }}">{{__('Subject') }}</a>
                        <a class="nav-link" href="#">{{__('Visualization') }}</a>
                        <a class="nav-link" href="{{ route('compagne.voir', app()->getLocale()) }}">{{__('Companion') }}</a>
                        <a class="nav-link" href="{{ route('compagne.voir', app()->getLocale()) }}">{{__('Users') }}</a>
                    </div>
                    </div>
                </div>
                    </ul>
                       </div>
                       
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
