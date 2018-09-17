@extends('layouts.formulario')

@section('titulo')
	editar tipo de Contrato
endsection

@section('rutaRegresar')
	href="{{ route('tipocontratos.index') }}"
@endsection

@section('formulario')
	@include('tipocontrato.partials.errors')
								{!! Form::model($tipocontrato, ['route' => ['tipocontratos.update', $tipocontrato->id], 'method' => 'PUT']) !!}
									
									@include('tipocontrato.partials.form')
									
								{!! Form::close() !!}
@endsection