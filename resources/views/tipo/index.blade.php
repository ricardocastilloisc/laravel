@extends('layouts.admin')
	@section('content')
	@include('tipo.modal')
		<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style='display:none'>
			<strong>Se actualizado correctamente</strong>
		</div>
		<table class="table">
			<thead>
				<th>Modalidad</th>
				<th>Operaciones</th>
			</thead>
			<tbody id="datos">
			</tbody>
		</table>
	@endsection
	
	@section('scripts')
		{!!Html::script('js/script2.js')!!}
	@endsection
