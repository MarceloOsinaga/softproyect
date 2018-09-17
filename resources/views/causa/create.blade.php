@extends('layouts.formulario')

@section('titulo')
Nueva Creacion de Tipo de Causa
@endsection

@section('rutaRegresar')
		href="{{ route('causas.index') }}"
@endsection

@section('formulario')
	@include('causa.partials.errors')
	{!! Form::open(['route' => 'causas.store']) !!}
		
		@include('causa.partials.form')
		
	{!! Form::close() !!}
@endsection
