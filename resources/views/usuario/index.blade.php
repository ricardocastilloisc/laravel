@extends('layouts.admin')  
<?php $message=Session::get('message') ?>
@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Usuario Creado Exitosamente
</div>
@endif

	
	@section('content')
		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Correo</th>
				<th>Operación</th>
			</thead>
			@foreach($users as $user)
			<tbody>
				<td>{{$user->name}}</td>
				<td>{{$user->namep}}</td>
				<td>{{$user->namem}}</td>
				<td>{{$user->email}}</td>	
				<td></td>
			</tbody>
			@endforeach
		</table>

	@stop