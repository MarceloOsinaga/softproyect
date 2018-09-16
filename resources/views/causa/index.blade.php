@extends('layouts.admin')

@section('content')
<div class="card card-outline-info">
			<div class="card-header">
				<h4 class="m-b-0 text-white">Tipo Contrato</h4>
				</div>
					<div class="row">
							<div class="col-lg-12">

								
									<div class="card-body">
									
										<a href="{{ route('causas.index') }}" class="btn btn-outline-primary btn-rounded pull-right">
												Regresar
												@include('causa.partials.info')
											</a>
										<h3 class="card-title">Datos</h3>
										<div class="table-responsive">
											<table class="table color-table muted-table">
												<thead>
													<tr>
														<th>ID</th>
														<th>NOMBRE</th>
														<th>DESCRIPCION</th>
														<th colspan="3">Accion</th>
													</tr>
												</thead>
												<tbody>
														@foreach($causas as $causa)
													<tr>
														<td >{{ $causa->id }}</td>
														<td>
															{{ $causa->nombre }}
														</td>
														<td >
															{{ $causa->descripcion }}
														</td>
														<td width="1%">
															<a href="{{ route('causas.show', $causa->id) }}" class="btn btn-secondary btn-circle">
																	<i class="fa fa-eye"></i>
															</a>
														</td>
														<td width="1%">
															<a href="{{ route('causas.edit', $causa->id) }}" class="btn btn-secondary btn-circle">
																	<i class="fa fa-edit (alias)"></i>
															</a>
														</td>
														<td width="1%" >
															{!! Form::open(['route' => ['causas.destroy', $causa->id], 'method' => 'DELETE']) !!}
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
											{!! $causas->render() !!}
										<a href="{{ route('causas.create') }}" class="btn btn-primary ">Nuevo</a>
										</div>
									
								</div>
							</div>
						</div>
					</div>

@endsection


