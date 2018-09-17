@extends('layouts.admin')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="card card-outline-info">
			<div class="card-header">
				<h4 class="m-b-0 text-white">Nuevo Empleado</h4>
			</div>
			<div class="card-body">
					<div class="form-body">
							<a href="{{ route('empleados.index') }}" class="btn btn-outline-primary btn-rounded pull-right">
									Regresar
								</a>
							<h3 class="card-title">Datos</h3>
							<hr>
							@include('empleado.partials.errors')
							{!! Form::open(['route' => 'empleados.store']) !!}
								
								@include('empleado.partials.form')
								
							{!! Form::close() !!}

							
						
					</div>
			</div>
		</div>
	</div>
</div>



@endsection