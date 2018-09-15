@extends('layouts.admin')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<h2>
			
			<a href="{{ route('departamentos.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
		</h2>
		<hr>
		<p>{{ $departamento->id }}</p> 
		<p>{{ $departamento->nombre }}</p>
		<p>{{ $departamento->descripcion }}</p>
		

		<a href="{{ route('departamentos.edit', $departamento->id) }}" class="btn btn-primary">
			Editar
		</a>
	</div>
	
@endsection