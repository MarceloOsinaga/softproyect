@extends('layouts.admin')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Nuevo departamento
			<a href="{{ route('departamentos.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
		</h2>
		<hr>
		@include('departamento.partials.errors')
		{!! Form::open(['route' => 'departamentos.store']) !!}
			
			@include('departamento.partials.form')
			
		{!! Form::close() !!}
	</div>
@endsection