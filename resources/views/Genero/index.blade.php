@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Generos <a href="Genero/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('Genero.search')
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
               @foreach ($genero as $gene)
				<tr>
					<td>{{ $gene->Id_Genero}}</td>
					<td>{{ $gene->Descripcion}}</td>
					<td>
						<a href="{{URL::action('GeneroController@edit',$gene->Id_Genero)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$gene->Id_Genero}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('Genero.modal')
				@endforeach
			</table>
		</div>
		{{$genero->render()}}
	</div>
</div>

@endsection