@extends('layouts.admin')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<h2>
			
			<a href="{{ route('tipocontratos.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
		</h2>
		<hr>
		<p>{{ $tipocontrato->id }}</p> 
		<p>{{ $tipocontrato->nombre }}</p>
		<p>{{ $tipocontrato->descripcion }}</p>
		

		<a href="{{ route('tipocontratos.edit', $tipocontrato->id) }}" class="btn btn-primary">
			Editar
		</a>
	</div>
	
@endsection