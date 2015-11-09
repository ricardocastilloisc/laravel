@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		  	{!!Form::open(['route'=>'escuela.store', 'method'=>'POST','files' => true])!!}
		  		@include('escuelas.forms.escuelas')
				{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
	@endsection 