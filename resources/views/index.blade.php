@extends('layouts.principal')
	@section('content')
	@include('alerts.errors')
	@include('alerts.request')
		{!!Form::open(['route'=>'log.store', 'method'=>'POST','class'=>'login-form'])!!}
			<div class="form-group">
				{!!Form::label('correo','Correo:', ['class'=>'sr-only'])!!}
				{!!Form::email('email',null,['placeholder'=>'Correo electrónico...', 'class'=>'form-username form-control', 'id' => 'form-username'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('contrasena','Contraseña:', ['class'=>'sr-only'])!!}
				{!!Form::password('password',['placeholder'=>'Contraseña...', 'class'=>'form-password form-control', 'id' => 'form-password'])!!}
			</div>
			{!!Form::submit('Iniciar Sesión',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}
@stop
