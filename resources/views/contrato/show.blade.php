@extends('layouts.formulario')

@section('titulo')
 Perfil de Contrato
@endsection

@section('rutaRegresar')
	href="{{ route('contratos.index') }}"

@endsection

@section('formulario')
						<strong>Id:</strong>
						<p>{{ $contrato->id }}</p> 
						<strong>Nombre:</strong>
						<p>{{ $contrato->nombre }}</p>
						<strong>Descripcion:</strong>
						<p>{{ $contrato->descripcion }}</p>
						<hr>
					<a href="{{ route('contratos.edit', $contrato->id) }}" class="btn  btn-outline-primary btn-rounded">
					Editar
				</a>
@endsection