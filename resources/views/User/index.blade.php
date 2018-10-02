@extends('layouts.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Usuario <a href="User/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('User.search')
		</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
  	<th>Cedula</th>
  	<th>Nombre</th>
  	<th>Apellido1</th>
    <th>Apellido2</th>
  	<th>Telefono</th>
  	<th>Correo</th>
    <th>Direccion</th>
  	<th>FechaIngreso</th>
  	<th>Clave</th>
    <th>Genero</th>
  	<th>Rol</th>
		<th>Creacion</th>
  
  	

  </thead>

 
  	<tr>
  		@foreach ($Usuario as $user)
  		<td>{{$user->Id_Usuario}}</td>
  		<td>{{$user->Nombre}}</td>
      <td>{{$user->Apellido1}}</td>
  		<td>{{$user->Apellido2}}</td>
      <td>{{$user->Telefono}}</td>
  		<td>{{$user->Correo}}</td>
      <td>{{$user->Direccion}}</td>
  		<td>{{$user->FechaIngreso}}</td>
      <td>{{$user->Clave}}</td>
			<td>{{ $user->genero->Descripcion}}</td>
  		<td>{{ $user->rol->Descripcion}}</td> /
	
   
  		<td>
			<a href="{{URL::action('UserController@edit',$user->Id_Usuario)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$user->Id_Usuario}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
  		</td>

  	</tr>
		@include('User.modal')
  	@endforeach

</table>

	</div>
	</div>
</div>






@endsection