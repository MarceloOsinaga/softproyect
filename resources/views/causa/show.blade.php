@extends('layouts.admin')

@section('content')
 <div class="card-body">
     <div class="row">
   		<div class="col-lg-12">
			<div class="card-header">
				<h4 class="m-b-0 text-white">Edicion de Tipo causa</h4>
			</div>
				<div class="card-body">
					<a href="{{ route('tipocausas.index') }}" class="btn btn-outline-primary btn-rounded pull-right">
						Regresar</a>
					<h3 class="card-title">Modifique los datos seleccionados</h3>
						<hr>
						<strong>Id:</strong>
						<p>{{ $tipocausa->id }}</p> 
						<strong>Nombre:</strong>
						<p>{{ $tipocausa->nombre }}</p>
						<strong>Descripcion:</strong>
						<p>{{ $tipocausa->descripcion }}</p>
						<hr>
					<a href="{{ route('tipocausas.edit', $tipocausa->id) }}" class="btn  btn-outline-primary btn-rounded">
					Editar
				</a>
			</div>
		</div>
	</div>
</div>
@endsection