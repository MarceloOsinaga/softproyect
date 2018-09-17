

<div class="form-group">
{!! Form::label('horaingreso', 'Hora de ingreso', ['class' => 'control-label']) !!}

{!! Form::time('horaingreso', null, ['class' => 'form-control','placeholder' => 'dd/mm/yyyy','id' => 'horaingreso']) !!}


</div>

<div class="form-group">
{!! Form::label('horasalida', 'Hora de salida', ['class' => 'control-label']) !!}

{!! Form::time('horasalida', null, ['class' => 'form-control','placeholder' => 'dd/mm/yyyy','id' => 'horasalida']) !!}


</div>

<div class="form-group">
{!! Form::label('fechainicio', 'Fecha de Inicio' , ['class' => 'control-label']) !!}
{!! Form::date('fechainicio', null, ['class' => 'form-control','placeholder' => 'dd/mm/yyyy','id' => 'fechainicio']) !!}
</div>

<div class="form-group">
{!! Form::label('fechafin', 'Fecha de vencimiento' , ['class' => 'control-label']) !!}
{!! Form::date('fechafin', null, ['class' => 'form-control','placeholder' => 'dd/mm/yyyy','id' => 'fechafin']) !!}
</div>

<div class="form-group">
{!! Form::label('salario', 'Salario' , ['class' => 'control-label']) !!}
{!! Form::number('salario', null, ['class' => 'form-control','placeholder' => '2000.00','id' => 'salario']) !!}
</div>

<div class="form-group">
{!! Form::label('turnotrabajo', 'Turno de trabajo' , ['class' => 'control-label']) !!}
{!! Form::text('turnotrabajo', null, ['class' => 'form-control','placeholder' => 'Turno de trabajo','id' => 'turnotrabajo']) !!}
</div>

<div class="form-group">
{!! Form::label('id_tipocontrato', 'Tipo de Contrato' , ['class' => 'control-label']) !!}
<select name="id_tipocontrato" required="">
	<option>--Seleccione una opcion</option>
		@foreach($tipocontrato as $tipocontratos)
		<option value="{{$tipocontratos->id}}">{{$tipocontratos->tipocontrato}}</option>
		@endforeach
</select>
</div>


<div class="form-group">
{!! Form::label('id_empleado', 'Empleado' , ['class' => 'control-label']) !!}
<select name="id_empleado" required="">
	<option>--Seleccione el empleado</option>
		@foreach($empleado as $empleados)
		<option value="{{$empleados->id}}">{{$empleados->empleado}}</option>
		@endforeach
</select>
</div>

<hr>
	<div class="form-actions">
			{!!  Form::submit('Guardar', ['class' => 'btn  btn-outline-primary btn-rounded '] ) !!}
</div>
