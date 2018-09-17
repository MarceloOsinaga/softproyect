@extends('layouts.formulario')

@section('titulo')
 Perfil de Contrato
@endsection

@section('rutaRegresar')
	href="{{ route('contratos.index') }}"

@endsection

@section('formulario')
						<strong>ID:</strong>
						<p>{{ $contrato->id }}</p> 
						<strong>Hora de ingreso:</strong>
						<p>{{ $contrato->horaingreso }}</p>
						<strong>Hora de salida:</strong>
						<p>{{ $contrato->horasalida }}</p>
						<strong>Fecha de Inicio:</strong>
						<p>{{ $contrato->fechainicio }}</p> 
						<strong>Fecha vencimiento de contrato:</strong>
						<p>{{ $contrato->fechafin }}</p>
						<strong>Salario Mensual:</strong>
						<p>{{ $contrato->salario }}</p>
						<strong>Turno de Trabajo:</strong>
						<p>{{ $contrato->turnotrabajo }}</p> 
						<strong>Tipo de Contrato:</strong>
						<p>{{ $contrato->id_tipocontrato }}</p>
						<strong>Empleado:</strong>
						<p>{{ $contrato->id_empleado }}</p>
						<hr>
					<a href="{{ route('contratos.edit', $contrato->id) }}" class="btn  btn-outline-primary btn-rounded">
					Editar
				</a>
@endsection