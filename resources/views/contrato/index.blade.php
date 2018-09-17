@extends('layouts.contenido')

@section('titulo')
Contrato
@endsection

@section('botonRegresar')

<a href="{{ route('contratos.index') }}" class="btn btn-outline-primary btn-rounded pull-right">
	Regresar
	@include('contrato.partials.info')
</a>
@endsection

@section('contenidoTablas')
	<thead>
		<tr>
			<th>ID</th>
			<th>Hora de Ingreso</th>
			<th>Hora de salida</th>
			<th colspan="3">Accion</th>
		</tr>
	</thead>
	<tbody>
			@foreach($contratos as $contrato)
		<tr>
			<td >{{ $contrato->id }}</td>
			<td>
				{{ $contrato->horaingreso }}
			</td>
			<td >
				{{ $contrato->horasalida }}
			</td>
			<td width="1%">
				<a href="{{ route('contratos.show', $contrato->id) }}" class="btn btn-secondary btn-circle">
						<i class="fa fa-eye"></i>
				</a>
			</td>
			<td width="1%">
				<a href="{{ route('contratos.edit', $contrato->id) }}" class="btn btn-secondary btn-circle">
						<i class="fa fa-edit (alias)"></i>
				</a>
			</td>
			<td width="1%" >
				{!! Form::open(['route' => ['contratos.destroy', $contrato->id], 'method' => 'DELETE']) !!}
					<button class="btn btn-secondary btn-circle ">
							<i class="fa fa-trash-o"></i>
					</button>							
				{!! Form::close() !!}
			</td>
	</tr>
		@endforeach
	</tbody>
@endsection
											
@section('paginarTablas')
	{!! $contratos->render() !!}
@endsection

@section('botonNuevo')	
	<a href="{{ route('contratos.create') }}" class="btn btn-primary ">Nuevo</a>
@endsection


