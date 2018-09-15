@extends('layouts.admin')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Nuevo producto
			<a href="{{ route('sindicatos.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
		</h2>
		<hr>
		@include('sindicato.partials.errors')
		{!! Form::open(['route' => 'sindicatos.store']) !!}
			
			@include('sindicato.partials.form')
			
		{!! Form::close() !!}
	</div>
@endsection