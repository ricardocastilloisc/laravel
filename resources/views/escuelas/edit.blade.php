@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		
		{!!Form::model($escuela,['route'=> ['escuela.update',$escuela->id],'method'=>'PUT','files' => true])!!}
			@include('escuelas.forms.escuelas')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['escuela.destroy',$escuela->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection