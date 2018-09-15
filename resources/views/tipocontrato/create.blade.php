@extends('layouts.admin')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Nuevo producto
			<a href="{{ route('tipocontratos.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
		</h2>
		<hr>
		@include('tipocontrato.partials.errors')
		{!! Form::open(['route' => 'tipocontratos.store']) !!}
			
			@include('tipocontrato.partials.form')
			
		{!! Form::close() !!}
	</div>
@endsection