@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Colmena <a href="Colmena/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('Colmena.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Descripcion</th>
					<th>Cantidad</th>
					<th>Ubicacion</th>
                    <th>Creacion</th>


				</thead>
               @foreach ($colmenas as $colmena)
				<tr>
					<td>{{ $colmena->Id_Colmena}}</td>
					<td>{{ $colmena->Descripcion}}</td>
					<td>{{ $colmena->Cantidad}}</td>
                    <td>{{ $colmena->ubicacion->Descripcion}}</td>
					<td>{{ $colmena->created_at}}</td>

					<td>
						<a href="{{URL::action('ColmenaController@edit',$colmena->Id_Colmena)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$colmena->Id_Colmena}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('Colmena.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection