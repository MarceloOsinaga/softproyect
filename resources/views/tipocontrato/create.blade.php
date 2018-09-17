@extends('layouts.formulario')

@section('titulo')
Nueva Creacion de Tipo Contrato
@endsection

@section('rutaRegresar')
		href="{{ route('tipocontratos.index') }}"
@endsection

@section('formulario')
	@include('tipocontrato.partials.errors')
	{!! Form::open(['route' => 'tipocontratos.store']) !!}
		
		@include('tipocontrato.partials.form')
		
	{!! Form::close() !!}
@endsection
