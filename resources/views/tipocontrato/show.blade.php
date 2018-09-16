@extends('layouts.admin')

@section('content')
 <div class="card-body">
     <div class="row">
   		<div class="col-lg-12">
			<div class="card-header">
				<h4 class="m-b-0 text-white">Edicion de Tipo Contrato</h4>
			</div>
				<div class="card-body">
					<a href="{{ route('tipocontratos.index') }}" class="btn btn-outline-primary btn-rounded pull-right">
						Regresar</a>
					<h3 class="card-title">Datos</h3>
						<hr>
						<strong>Id:</strong>
						<p>{{ $tipocontrato->id }}</p> 
						<strong>Nombre:</strong>
						<p>{{ $tipocontrato->nombre }}</p>
						<strong>Descripcion:</strong>
						<p>{{ $tipocontrato->descripcion }}</p>
						<hr>
					<a href="{{ route('tipocontratos.edit', $tipocontrato->id) }}" class="btn  btn-outline-primary btn-rounded">
					Editar
				</a>
			</div>
		</div>
	</div>
</div>
@endsection