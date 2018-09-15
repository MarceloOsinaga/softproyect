@extends('layouts.admin')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<hr>
		@include('causa.partials.info')
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
				@foreach($causas as $causa)
				<tr>
					<td>{{ $causa->id }}</td>
					<td>
						{{ $causa->nombre }}
					</td>
					<td>
						{{ $causa->descripcion }}
					</td>
					<td width="20px">
						<a href="{{ route('causas.show', $causa->id) }}" class="btn btn-link">
							Ver
						</a>
					</td>
					<td width="20px">
						<a href="{{ route('causas.edit', $causa->id) }}" class="btn btn-link">
							Editar
						</a>
					</td>
					<td width="20px">
						{!! Form::open(['route' => ['causas.destroy', $causa->id], 'method' => 'DELETE']) !!}
							<button class="btn btn-link">
								Borrar
							</button>							
						{!! Form::close() !!}
					</td>
				</tr>
				@endforeach
			</tbody>
			<a href="{{ route('causas.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</table>
		{!! $causas->render() !!}
	</div>
	
@endsection