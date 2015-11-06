		<div class="form-group">
			{!!Form::label('Nombre:')!!}
			{!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingrese su Nombre'])!!}	
		</div>
		<div class="form-group">
			{!!Form::label('Apellido Paterno:')!!}
			{!!Form::text('namep',null,['class'=>'form-control', 'placeholder'=>'Ingrese su Apellido Paterno'])!!}	
		</div>
		<div class="form-group">
			{!!Form::label('Apellido Materno:')!!}
			{!!Form::text('namem',null,['class'=>'form-control', 'placeholder'=>'Ingrese su Apellido Materno'])!!}	
		</div>
		<div class="form-group">
			{!!Form::label('Correo:')!!}
			{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingrese su Correo'])!!}	
		</div>

		<div class="form-group">
			{!!Form::label('Password:')!!}
			{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingrese su contraseña'])!!}	
		</div>
		