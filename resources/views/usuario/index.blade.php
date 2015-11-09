@extends('layouts.admin')  
	@include('alerts.success')
	@section('content')
	<div class="users">
		<table class="table" width="100%">
			<thead>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
			</thead>
			@foreach($users as $user)
			<tbody>
				<td>{{$user->name}}</td>
				<td>{{$user->namep}}</td>
				<td>{{$user->namem}}</td>
			</tbody>
			<thead>
				<th>Correo</th>
				<th colspan="2">Operación</th>
			</thead>
			<tbody>
				<td>{{$user->email}}</td>	
				<td colspan="2">
				{!!link_to_route('usuario.edit', $title='Editar', $parameters=$user->id, $attributes=['class'=>'btn btn-primary'])!!}
				</td>
			</tbody>
			<tbody>
			<tr>
				<td height="20px"></td>
			</tr>
			</tbody>
			
			@endforeach
		</table>
		{!!$users->render()!!}
	</div>
	@endsection

	@section('scripts')
		{!!Html::script('js/script3.js')!!}
	@endsection
	@stop