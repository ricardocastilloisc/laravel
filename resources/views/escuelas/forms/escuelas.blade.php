<div class="form-group">
	{!!Form::label('nombre_unidad_administrativa','Nombre Escuela:')!!}
	{!!Form::text('nombre_unidad_administrativa',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la Escuela'])!!}
</div>

<div class="form-group">
	{!!Form::label('cct','CCT:')!!}
	{!!Form::text('cct',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Clave Centro de Trabajo'])!!}
</div>
<div class="form-group">
	{!!Form::label('telefono','Telefono: ')!!}
	{!!Form::number('telefono',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Telefono'])!!}
</div>

<div class="form-group">
	{!!Form::label('celular','Celular: ')!!}
	{!!Form::number('celular',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Telefono'])!!}
</div>
<div class="form-group">
	{!!Form::label('Correo:')!!}
	{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingrese su Correo'])!!}	
</div>
<div class="form-group">
	{!!Form::label('tipo','Modalidad:')!!}
	{!!Form::select('tipo_id',$tipos)!!}
</div>

<div class="form-group">
	{!!Form::label('imagen','Imagen de la Escuela:')!!}
	{!!Form::file('path')!!}
</div>

