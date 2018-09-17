@extends('layouts.admin')

@section('content')
<div class="row">
		<div class="col-lg-12">
			<div class="card card-outline-info">
				<div class="card-header">
					<h4 class="m-b-0 text-white">Edicion de Tipo Contrato</h4>
				</div>
							<div class="card-body">
									<a href="{{ route('empleados.index') }}" class="btn btn-outline-primary btn-rounded pull-right">
											Regresar
										</a>
										<h3 class="card-title">Datos</h3>
									<hr>
									<strong>Id:</strong>
									<p>{{ $empleado->id }}</p> 
									<strong>Nombre:</strong>
									<p>{{ $empleado->nombre }}</p>
									<strong>Apellido Paterno:</strong>
									<p>{{ $empleado->appaterno }}</p>
									<strong>Apellido Materno:</strong>
									<p>{{ $empleado->apmaterno }}</p>
									<strong>Cargo:</strong>
									<p>{{ $empleado->cargo }}</p>
									<strong>Ci:</strong>
									<p>{{ $empleado->ci }}</p>
									<strong>Direccion:</strong>
									<p>{{ $empleado->direccion }}</p>
									<strong>Estado Civil:</strong>
									<p>{{ $empleado->estadocivil }}</p>
									<strong>Fecha nacimiento:</strong>
									<p>{{ $empleado->fechanac }}</p>
									<strong>Genero:</strong>
									<p>{{ $empleado->genero }}</p>
									<strong>Nacionalidad:</strong>
									<p>{{ $empleado->nacionalidad }}</p>
									<strong>Telefono:</strong>
									<p>{{ $empleado->telefono }}</p>
									<strong>Sindicato:</strong>
									<p>{{ $empleado->id_sindicato }}</p>
									<strong>Departamento:</strong>
									<p>{{ $empleado->id_departamento }}</p>
		
									<hr>
				<a href="{{ route('empleados.edit', $empleado->id) }}" class="btn  btn-outline-primary btn-rounded">
					Editar
				</a>
			</div>
		</div>
	</div>
</div>
</div>

	
@endsection