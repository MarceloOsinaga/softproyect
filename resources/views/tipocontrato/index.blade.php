@extends('layouts.admin')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<hr>
		@include('Tipocontrato.partials.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Nombre</th>
					<th>Nombre Descripcion</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tipocontratos as $tipocontrato)
				<tr>
					<td>{{ $tipocontrato->id }}</td>
					<td>
						{{ $tipocontrato->nombre }}
					</td>
					<td>
						{{ $tipocontrato->descripcion }}
					</td>
					<td width="20px">
						<a href="{{ route('tipocontratos.show', $tipocontrato->id) }}" class="btn btn-link">
							Ver
						</a>
					</td>
					<td width="20px">
						<a href="{{ route('tipocontratos.edit', $tipocontrato->id) }}" class="btn btn-link">
							Editar
						</a>
					</td>
					<td width="20px">
						{!! Form::open(['route' => ['tipocontratos.destroy', $tipocontrato->id], 'method' => 'DELETE']) !!}
							<button class="btn btn-link">
								Borrar
							</button>							
						{!! Form::close() !!}
					</td>
				</tr>
				@endforeach
			</tbody>
			<a href="{{ route('tipocontratos.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</table>
		{!! $tipocontratos->render() !!}
	</div>
	
@endsection