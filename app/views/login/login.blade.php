@extends('layouts.login')

@section('content')
	<div class="container">
      
      {{ Form::open(['url' => '/login', 'class' => 'form-signin', 'role' => 'form']) }}
        {{ Form::text('login', null, ['class' => 'form-control', 'placeholder' => 'Login', 'required', 'autofocus']) }}
        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Hasło', 'required']) }}
        
        <div class='checkbox'>
          {{ Form::label('remember-me', 'Pamiętaj mnie') }}
          {{ Form::checkbox('remember-me', 'remember-me') }}
        </div>
        
        {{ Form::submit('Zaloguj', ['class' => 'btn btn-lg btn-primary btn-block']) }}
      {{ Form::close() }}

    </div>
@stop