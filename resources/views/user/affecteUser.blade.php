@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('users') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.affecteUser',['user'=>request()->user, 'language'=>app()->getLocale()] ) }}">
                        @csrf

                        

                        <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">Compagnes</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach((\App\User::where('idOrganisation',request()->user)->get()) as $user)
                            <tr>
                            <th scope="row">1</th>
                            <td name="idUser">{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                            @foreach((\App\Compagne::where('id_Organisation',request()->user)->get()) as $compagne)
                            {{$compagne->numCompagne}}<input type="checkbox" name="compagne" value="{{$compagne->id_Compagne}}"><br/>
                            @endforeach
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4" >
                                <button type="submit" class="btn btn-primary" > 
                                     affect
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
