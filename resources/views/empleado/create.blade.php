@extends('layouts.admin')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Nuevo causa
			<a href="{{ route('causas.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
		</h2>
		<hr>
		@include('causa.partials.errors')
		{!! Form::open(['route' => 'causas.store']) !!}
			
			@include('causa.partials.form')
			
		{!! Form::close() !!}
	</div>
@endsection