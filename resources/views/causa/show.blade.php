@extends('layouts.admin')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<h2>
			
			<a href="{{ route('sindicatos.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
		</h2>
		<hr>
		<p>{{ $sindicato->id }}</p> 
		<p>{{ $sindicato->nombre }}</p>
		<p>{{ $sindicato->descripcion }}</p>
		

		<a href="{{ route('sindicatos.edit', $sindicato->id) }}" class="btn btn-primary">
			Editar
		</a>
	</div>
	
@endsection