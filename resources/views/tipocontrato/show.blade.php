@extends('layouts.formulario')

@section('titulo')
 Perfil Tipo Contrato
@endsection

@section('rutaRegresar')
	href="{{ route('tipocontratos.index') }}"

@endsection

@section('formulario')
						<strong>Id:</strong>
						<p>{{ $tipocontrato->id }}</p> 
						<strong>Nombre:</strong>
						<p>{{ $tipocontrato->nombre }}</p>
						<strong>Descripcion:</strong>
						<p>{{ $tipocontrato->descripcion }}</p>
						<hr>
					<a href="{{ route('tipocontratos.edit', $tipocontrato->id) }}" class="btn  btn-outline-primary btn-rounded">
					Editar
				</a>
@endsection