@extends('layouts.admin')
	@section('content')
		{!!Form::open()!!}

		@include('alerts.alertstipo')
		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> 
			@include('tipo.form.tipo')
			{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registro', 'class'=>'btn btn-primary'], $secure = null)!!}
		{!!Form::close()!!}
	@endsection
	@section('scripts')
		{!!Html::script('js/script.js')!!}
	@endsection

@stop