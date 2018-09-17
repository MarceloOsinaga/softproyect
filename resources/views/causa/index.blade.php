@extends('layouts.contenido')

@section('titulo')
Tipo de Causa
@endsection

@section('botonRegresar')

<a href="{{ route('causas.index') }}" class="btn btn-outline-primary btn-rounded pull-right">
	Regresar
	@include('causa.partials.info')
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
			@foreach($causas as $causa)
		<tr>
			<td >{{ $causa->id }}</td>
			<td>
				{{ $causa->nombre }}
			</td>
			<td >
				{{ $causa->descripcion }}
			</td>
			<td width="1%">
				<a href="{{ route('causas.show', $causa->id) }}" class="btn btn-secondary btn-circle">
						<i class="fa fa-eye"></i>
				</a>
			</td>
			<td width="1%">
				<a href="{{ route('causas.edit', $causa->id) }}" class="btn btn-secondary btn-circle">
						<i class="fa fa-edit (alias)"></i>
				</a>
			</td>
			<td width="1%" >
				{!! Form::open(['route' => ['causas.destroy', $causa->id], 'method' => 'DELETE']) !!}
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
	{!! $causas->render() !!}
@endsection

@section('botonNuevo')	
	<a href="{{ route('causas.create') }}" class="btn btn-primary ">Nuevo</a>
@endsection


