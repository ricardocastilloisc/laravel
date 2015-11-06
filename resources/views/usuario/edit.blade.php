@extends('layouts.admin')
	@section('content')
	@include('alerts.request') 
		{!!Form::model($user,['route' => ['usuario.update',$user->id],'method'=>'PUT'])!!}
			@include('usuario.forms.usr')
			<table>
			<tr>
			<td>
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
			</td>
		{!!Form::close()!!}
			<td>

		{!!Form::open(['route' => ['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
			</td>
			</tr>
			</table>
@stop