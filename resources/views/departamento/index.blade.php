@extends('layouts.admin')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<hr>
		@include('departamento.partials.info')
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
				@foreach($departamentos as $departamento)
				<tr>
					<td>{{ $departamento->id }}</td>
					<td>
						{{ $departamento->nombre }}
					</td>
					<td>
						{{ $departamento->descripcion }}
					</td>
					<td width="20px">
						<a href="{{ route('departamentos.show', $departamento->id) }}" class="btn btn-link">
							Ver
						</a>
					</td>
					<td width="20px">
						<a href="{{ route('departamentos.edit', $departamento->id) }}" class="btn btn-link">
							Editar
						</a>
					</td>
					<td width="20px">
						{!! Form::open(['route' => ['departamentos.destroy', $departamento->id], 'method' => 'DELETE']) !!}
							<button class="btn btn-link">
								Borrar
							</button>							
						{!! Form::close() !!}
					</td>
				</tr>
				@endforeach
			</tbody>
			<a href="{{ route('departamentos.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</table>
		{!! $departamentos->render() !!}
	</div>
	
@endsection