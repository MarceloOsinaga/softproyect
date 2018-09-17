@extends('layouts.formulario')

@section('titulo')
 Perfil tipo de causa Actual
@endsection

@section('rutaRegresar')
	href="{{ route('causas.index') }}"

@endsection

@section('formulario')
						<strong>Id:</strong>
						<p>{{ $causa->id }}</p> 
						<strong>Nombre:</strong>
						<p>{{ $causa->nombre }}</p>
						<strong>Descripcion:</strong>
						<p>{{ $causa->descripcion }}</p>
						<hr>
					<a href="{{ route('causas.edit', $causa->id) }}" class="btn  btn-outline-primary btn-rounded">
					Editar
				</a>
@endsection