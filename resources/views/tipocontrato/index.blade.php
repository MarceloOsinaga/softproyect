@extends('layouts.contenido')

@section('titulo')
Tipo Contrato
@endsection

@section('botonRegresar')

<a href="{{ route('tipocontratos.index') }}" class="btn btn-outline-primary btn-rounded pull-right">
	Regresar
	@include('Tipocontrato.partials.info')
</a>
@endsection

@section('contenidoTablas')
	<thead>
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>DESCRIPCION</th>
			<th colspan="3">Accion</th>
		</tr>
	</thead>
	<tbody>
			@foreach($tipocontratos as $tipocontrato)
		<tr>
			<td >{{ $tipocontrato->id }}</td>
			<td>
				{{ $tipocontrato->nombre }}
			</td>
			<td >
				{{ $tipocontrato->descripcion }}
			</td>
			<td width="1%">
				<a href="{{ route('tipocontratos.show', $tipocontrato->id) }}" class="btn btn-secondary btn-circle">
						<i class="fa fa-eye"></i>
				</a>
			</td>
			<td width="1%">
				<a href="{{ route('tipocontratos.edit', $tipocontrato->id) }}" class="btn btn-secondary btn-circle">
						<i class="fa fa-edit (alias)"></i>
				</a>
			</td>
			<td width="1%" >
				{!! Form::open(['route' => ['tipocontratos.destroy', $tipocontrato->id], 'method' => 'DELETE']) !!}
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
	{!! $tipocontratos->render() !!}
@endsection

@section('botonNuevo')	
	<a href="{{ route('tipocontratos.create') }}" class="btn btn-primary ">Nuevo</a>
@endsection


