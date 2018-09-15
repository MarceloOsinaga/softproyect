@extends('layouts.admin')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Editar producto
			<a href="{{ route('tipocontratos.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
		</h2>
		<hr>
		@include('tipocontrato.partials.errors')
		{!! Form::model($tipocontrato, ['route' => ['tipocontratos.update', $tipocontrato->id], 'method' => 'PUT']) !!}
			
			@include('tipocontrato.partials.form')
			
		{!! Form::close() !!}
	</div>
	@endsection