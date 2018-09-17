

	<div class="form-group">
	{!! Form::label('horaingreso', 'Hora de ingreso', ['class' => 'control-label']) !!}

	{!! Form::time('horaingreso', null, ['class' => 'form-control','placeholder' => 'Nombre','id' => 'horaingreso']) !!}


	</div>


	<div class="form-group">
	{!! Form::label('descripcion', 'Descripción' , ['class' => 'control-label']) !!}
	{!! Form::date('descripcion', null, ['class' => 'form-control','placeholder' => 'Descripcion','id' => 'Descripcion']) !!}
	</div>

<hr>
	<div class="form-actions">
			{!!  Form::submit('Guardar', ['class' => 'btn  btn-outline-primary btn-rounded '] ) !!}
</div>