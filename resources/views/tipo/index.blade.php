@extends('layouts.admin')
	@section('content')
		<table class="table">
			<thead>
				<th>Modalidad</th>
				<th>Operaciones</th>
			</thead>
			<tbody id="datos"></tbody>
		</table>
	@endsection
	@section('scripts')
		{!!Html::script('js/script2.js')!!}
	@endsection
