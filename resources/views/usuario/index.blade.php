@extends('layouts.admin')  
	@include('alerts.success')
	@section('content')
	<div class="users">
		<table class="table" width="100%">
			<tbody>
			</thead>
			@foreach($users as $user)
				<tr>
					<th>Nombre</th>
					<th>Apellido Paterno</th>
					
				</tr>
				<tr>
					<td>{{$user->name}}</td>
					<td>{{$user->namep}}</td>
					
				</tr>
				<tr>
					<th>Apellido Materno</th>
					<th>Correo</th>
				</tr>
				<tr>
					<td>{{$user->namem}}</td>
					<td>{{$user->email}}</td>	
	
				</tr>
				<tr>
					<td colspan="2">
					{!!link_to_route('usuario.edit', $title='Editar', $parameters=$user->id, $attributes=['class'=>'btn btn-primary'])!!}
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		{!!$users->render()!!}
	</div>
	@endsection

	@section('scripts')
		{!!Html::script('js/script3.js')!!}
	@endsection
	