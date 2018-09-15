@extends('layouts.admin')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<hr>
		@include('sindicato.partials.info')
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
				@foreach($sindicatos as $sindicato)
				<tr>
					<td>{{ $sindicato->id }}</td>
					<td>
						{{ $sindicato->nombre }}
					</td>
					<td>
						{{ $sindicato->descripcion }}
					</td>
					<td width="20px">
						<a href="{{ route('sindicatos.show', $sindicato->id) }}" class="btn btn-link">
							Ver
						</a>
					</td>
					<td width="20px">
						<a href="{{ route('sindicatos.edit', $sindicato->id) }}" class="btn btn-link">
							Editar
						</a>
					</td>
					<td width="20px">
						{!! Form::open(['route' => ['sindicatos.destroy', $sindicato->id], 'method' => 'DELETE']) !!}
							<button class="btn btn-link">
								Borrar
							</button>							
						{!! Form::close() !!}
					</td>
				</tr>
				@endforeach
			</tbody>
			<a href="{{ route('sindicatos.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</table>
		{!! $sindicatos->render() !!}
	</div>
	
@endsection