@extends('user.accederQuestionnaire')

@section('content')
<div class="container"><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header">{{ __('evaluation subject') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.sujet',['sujet'=>request()->sujet, 'language'=>app()->getLocale()] )}}" method="POST">
                        @csrf
                        <div class="form-group row"> 
                        @foreach((\App\Sujet::where('id','13')->get()) as $sujet)
                            <label>Subject title: {{$sujet->titre}}</label>
                            <label>Subject description: {{$sujet->description}}</label>
                        @endforeach
                        </div>

                        <ul class="list-group">
                        @foreach((\App\Dimension::where('idSujet','15')->get()) as $dimension)
                        <li class="list-group-item list-group-item-secondary" name="dimension" value="{{$dimension->id}}">{{$dimension->titre}}</li>
                        @foreach((\App\Critere::where('idCompagne','61')->get()) as $critere)
                        {{$critere->titre}}<input type="radio" name="critere" value="{{$critere->id}}"><br/>
                        @endforeach
                        @endforeach
                        </ul> <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4" >
                                <button type="submit" class="btn btn-primary" > 
                                  Submit the questionnaire
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
