@extends('layouts.admin')

@section('content')
<div class="card card-outline-info">
			<div class="card-header">
				<h4 class="m-b-0 text-white">Empleados</h4>
				</div>
					<div class="row">
							<div class="col-lg-12">

								
									<div class="card-body">
										<h4 class="card-title">Primary Table</h4>
										<a href="{{ route('tipocontratos.index') }}" class="btn btn-outline-primary btn-rounded pull-right">
												Regresar
												@include('Tipocontrato.partials.info')
											</a>
										<h3 class="card-title">Datos</h3>
										<h6 class="card-subtitle">Add class <code>.color-table .primary-table</code></h6>
										<div class="table-responsive">
											<table class="table color-table muted-table">
												<thead>
													<tr>
														<th>#</th>
														<th>Nombre</th>
														<th>Apellodo Paterno</th>
														<th>Apellodo Materno</th>
														<th>Cargo</th>
														<th>CI</th>
														<th>Dirección</th>
														<th>Estado Civil</th>
														<th>Fecha Nac.</th>
														<th>Genero</th>
														<th>Nacionalidad</th>
														<th>Telefono</th>
														<th>Sindicato</th>
														<th>Departamento</th>
														<th colspan="3">Accion</th>
													</tr>
												</thead>
												<tbody>
														@foreach($empleados as $empleado)
													<tr>
														<td >{{ $empleado->id }}</td>
														<td >{{ $empleado->nombre }}</td>
														<td >{{ $empleado->appaterno }}</td>
														<td >{{ $empleado->apmaterno }}</td>
														<td >{{ $empleado->cargo }}</td>
														<td >{{ $empleado->ci }}</td>
														<td >{{ $empleado->direccion }}</td>
														<td >{{ $empleado->estadocivil }}</td>
														<td >{{ $empleado->fechanac }}</td>
														<td >{{ $empleado->genero }}</td>
														<td >{{ $empleado->nacionalidad }}</td>
														<td >{{ $empleado->telefono }}</td>
														<td >{{ $empleado->sindicato->nombre }}</td>
														<td >{{ $empleado->departamento->nombre }}</td>
														<td width="1%">
															<a href="{{ route('empleados.show', $empleado->id) }}" class="btn btn-secondary btn-circle">
																	<i class="fa fa-eye"></i>
															</a>
														</td>
														<td width="1%">
															<a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-secondary btn-circle">
																	<i class="fa fa-edit (alias)"></i>
															</a>
														</td>
														<td width="1%" >
															{!! Form::open(['route' => ['empleados.destroy', $empleado->id], 'method' => 'DELETE']) !!}
																<button class="btn btn-secondary btn-circle ">
																		<i class="fa fa-trash-o"></i>
																</button>							
															{!! Form::close() !!}
														</td>
												</tr>
													@endforeach
												</tbody>
											</table>
											<hr>
											{!! $empleados->render() !!}
										<a href="{{ route('empleados.create') }}" class="btn btn-primary ">Nuevo</a>
										</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection


