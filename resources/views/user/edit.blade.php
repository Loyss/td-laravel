@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Modifier mon profil
                    </div>
                    <div class="panel-body">

                        {!! Form::model($user,
                        array(
                        'route' => array('profile.update', $user->id),
                        'method' => 'PUT',
                        'class' => 'form-horizontal'
                        )) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Nom', [
                            'class' => 'col-md-4 control-label'
                            ]) !!}
                            <div class="col-md-5">
                                {!! Form::text('name', old('name'), [
                                'class' => 'form-control',
                                'placeholder' => ''
                                ])
                            !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Adresse email', [
                            'class' => 'col-md-4 control-label'
                            ]) !!}
                            <div class="col-md-5">
                                {!! Form::text('email', old('email'), [
                                'class' => 'form-control',
                                'placeholder' => ''
                                ])
                            !!}
                            </div>
                        </div>

                        <div class="text-center">
                            {!! Form::submit('Enregistrer modifications',
                                ['class' => 'btn btn-primary'])
                            !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection