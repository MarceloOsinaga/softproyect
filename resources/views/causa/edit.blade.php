@extends('layouts.formulario')

@section('titulo')
	editar tipo de causa
endsection

@section('rutaRegresar')
	href="{{ route('causas.index') }}"
@endsection

@section('formulario')
	@include('causa.partials.errors')
								{!! Form::model($causa, ['route' => ['causas.update', $causa->id], 'method' => 'PUT']) !!}
									
									@include('causa.partials.form')
									
								{!! Form::close() !!}
@endsection