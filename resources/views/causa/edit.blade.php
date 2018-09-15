@extends('layouts.admin')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Editar causa
			<a href="{{ route('causas.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
		</h2>
		<hr>
		@include('causa.partials.errors')
		{!! Form::model($causa, ['route' => ['causas.update', $causa->id], 'method' => 'PUT']) !!}
			
			@include('causa.partials.form')
			
		{!! Form::close() !!}
	</div>
	@endsection