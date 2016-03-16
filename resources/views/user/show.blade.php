@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mon compte</div>
                    <div class="panel-body">
                        <div class="col-xs-4 text-right">
                            <h4>Name :</h4>
                        </div>
                        <div class="col-xs-8">
                            <h4>{{ Auth::user()->name }}</h4>
                        </div>
                        <div class="col-xs-4 text-right">
                            <h4>Mail :</h4>
                        </div>
                        <div class="col-xs-8">
                            <h4>{{ Auth::user()->email }}</h4>
                        </div>
                        <div class="col-xs-8 col-xs-offset-4">
                            <br>
                            @if(Auth::check() && (Auth::user()->id == $user->id OR Auth::user()->isAdmin))
                            <a href="{{route('user.edit', $user->id)}}" type="button" class="btn btn-info btn-md">Editer mon profil</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('user.showPosts')
    @include('user.showProjects')
@endsection
