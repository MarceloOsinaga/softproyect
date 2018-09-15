<div class="row p-t-20">
<div class="col-md-6">
	<div class="form-group">
	{!! Form::label('name', 'Nombre ', ['class' => 'control-label']) !!}
	{!! Form::text('nombre', null, ['class' => 'form-control'],['placeholder' => 'Nombre'],['id' => 'Nombre']) !!}
	</div>
</div>
<div class="col-md-6">
	<div class="form-group">
	{!! Form::label('descripcion', 'Descripción' , ['class' => 'control-label'],['placeholder' => 'Nombre'],['id' => 'Nombre']) !!}
	{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
	</div>
</div>
</div>
<hr>
	<div class="form-actions">
			{!!  Form::submit('Guardar', ['class' => 'btn  btn-outline-primary btn-rounded '] ) !!}
</div>