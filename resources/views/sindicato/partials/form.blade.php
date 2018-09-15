<div class="form-group">
	{!! Form::label('name', 'Nombre del Sindicato') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('descripcion', 'Descripción breve sobre el sindicato') !!}
	{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>