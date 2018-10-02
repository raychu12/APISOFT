@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Estado Civil <a href="Estado_Civil/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('Estado_Civil.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Descripción</th>
				
				</thead>
               @foreach ($estado_Civil as $estado)
				<tr>
					<td>{{ $estado->Id_Estado_Civil}}</td>
					<td>{{ $estado->Descripcion}}</td>
					<td>
                  
                         <a href="" data-target="#modal-delete-{{$estado->Id_Estado_Civil}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('Estado_Civil.modal')
				@endforeach
			</table>
		</div>
		{{$estado_Civil->render()}}
	</div>
</div>

@endsection