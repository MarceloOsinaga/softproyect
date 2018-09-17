@extends('layouts.formulario')

@section('titulo')
	editar Contrato
endsection

@section('rutaRegresar')
	href="{{ route('contratos.index') }}"
@endsection

@section('formulario')
	@include('contrato.partials.errors')
		{!! Form::model($contrato, ['route' => ['contratos.update', $contrato->id], 'method' => 'PUT']) !!}
			
			@include('contrato.partials.form')
			
		{!! Form::close() !!}
@endsection