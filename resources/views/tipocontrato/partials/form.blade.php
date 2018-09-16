

	<div class="form-group">
	{!! Form::label('name', 'Nombre ', ['class' => 'control-label']) !!}
	{!! Form::text('nombre', null, ['class' => 'form-control','placeholder' => 'Nombre'])!!}

	</div>


	<div class="form-group">
	{!! Form::label('descripcion', 'Descripción' , ['class' => 'control-label']) !!}
	{!! Form::text('descripcion', null, ['class' => 'form-control','placeholder' => 'Descripcion']) !!}
	</div>

<hr>
	<div class="form-actions">
			{!!  Form::submit('Guardar', ['class' => 'btn  btn-outline-primary btn-rounded '] ) !!}
</div>