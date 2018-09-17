@extends('layouts.formulario')

@section('titulo')
Nueva Creacion de Contrato
@endsection

@section('rutaRegresar')
		href="{{ route('contratos.index') }}"
@endsection

@section('formulario')
	@include('contrato.partials.errors')
	{!! Form::open(['route' => 'contratos.store']) !!}
		
		@include('contrato.partials.form')
		
	{!! Form::close() !!}
@endsection
