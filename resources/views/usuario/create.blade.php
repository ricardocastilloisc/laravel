@extends('layouts.admin')
@section('content')
	<!--Alertas en laravel en la carpeta que esta en views-->
	@include('alerts.request')

	{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
		@include('usuario.forms.usr')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop
 