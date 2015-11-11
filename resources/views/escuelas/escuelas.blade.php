
<div class="escuelas">
		
	
		<table class="table" width="100%">
			@foreach($escuelas as $escuela)
			<tbody>
				<tr>
					<th>Nombre Escuela:</th>
					<th>Imagen:</th>
				</tr>
				<tr>
					<td>{{$escuela->nombre_unidad_administrativa}}</td>
					<td rowspan="3">
						<img src="escuelas/{{$escuela->path}}" alt="" style="width:100px;"/>
					</td>
				</tr>
				<tr>
					<th>CCT:</th>
				</tr>
				<tr>
					<td>{{$escuela->cct}}</td>
				</tr>
				<tr>
					<th>Modalidad:</th>
					<th>Telefono:</th>
				</tr>
				<tr>
					<td>{{$escuela->tipo}}</td>
					<td>{{$escuela->telefono}}</td>
				</tr>
				<tr>
					<th>Celular:</th>
					<th>Email:</th>
				</tr>
				<tr>
					<td>{{$escuela->celular}}</td>
					<td>{{$escuela->email}}</td>
				</tr>
				<tr>
					<th>Operaciones:</th>
				</tr>
				<tr><td>


				{!!link_to_route('escuela.edit', $title='Editar', $parameters=$escuela->id, $attributes=['class'=>'btn btn-primary'])!!}
				
				</td>
				</tr>
				<tr>
					<td height="30px"></td>
				</tr>
			</tbody>

			@endforeach
		</table>
		{!!$escuelas->render()!!}
	