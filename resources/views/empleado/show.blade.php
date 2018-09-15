@extends('layouts.admin')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<h2>
			
			<a href="{{ route('causas.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
		</h2>
		<hr>
		<p>{{ $causa->id }}</p> 
		<p>{{ $causa->nombre }}</p>
		<p>{{ $causa->descripcion }}</p>
		

		<a href="{{ route('causas.edit', $causa->id) }}" class="btn btn-primary">
			Editar
		</a>
	</div>
	
@endsection