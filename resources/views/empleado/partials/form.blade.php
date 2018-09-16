

		<div class="form-group">
			{!! Form::label('name', 'Nombre :', ['class' => 'control-label']) !!}
			{!! Form::text('nombre', null, ['class' => 'form-control','placeholder' => 'Nombre','id' => 'Nombre']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('appaterno', 'Apellido Paterno :', ['class' => 'control-label']) !!}
			{!! Form::text('appaterno', null, ['class' => 'form-control','placeholder' => 'Apellido Paterno','id' => 'appaterno']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('apmaterno', 'Apellido Paterno :', ['class' => 'control-label']) !!}
			{!! Form::text('apmaterno', null, ['class' => 'form-control','placeholder' => 'Apellido Materno','id' => 'apmaterno']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('cargo', 'Cargo :', ['class' => 'control-label']) !!}
			{!! Form::text('cargo', null, ['class' => 'form-control','placeholder' => 'Cargo','id' => 'cargo']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('ci', 'CI : ', ['class' => 'control-label']) !!}
			{!! Form::number('ci', null, ['class' => 'form-control','placeholder' => 'Ci','id' => 'Nombre']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('fechanac', 'Fecha nac.: ', ['class' => 'control-label']) !!}
			{!! Form::date('fechanac', null, ['class' => 'form-control','placeholder' => 'Direccion','id' => 'direccion']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('genero', 'Genero :', ['class' => 'control-label']) !!}
			{!! Form::text('genero', null, ['class' => 'form-control','placeholder' => 'Genero','id' => 'Nombre']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('nacionalidad', 'Nacionalidad :', ['class' => 'control-label']) !!}
			{!! Form::text('nacionalidad', null, ['class' => 'form-control','placeholder' => 'Nacionalidad','id' => 'Nombre']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('telefono', 'Telefono ', ['class' => 'control-label']) !!}
			{!! Form::number('telefono', null, ['class' => 'form-control','3366566' => 'Nombre','id' => 'Nombre']) !!}
		</div>
	
	

<hr>
	<div class="form-actions">
			{!!  Form::submit('Guardar', ['class' => 'btn  btn-outline-primary btn-rounded '] ) !!}
</div>