@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Usuario</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'Usuario','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="Id_Usuario">Cedula</label>
            	<input type="text" name="Id_Usuario" class="form-control" placeholder="Id_Usuario...">
            </div>
           
            <div class="form-group">
            	<label for="Nombre">Nombre</label>
            	<input type="text" name="Nombre" class="form-control" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<label for="Apellido1">Primer apellido</label>
				<input type="text" name="Apellido1" class="form-control" placeholder="Apellido1..." />
            </div>
            <div class="form-group">
            	<label for="Apellido2">Segundo apellido</label>
				<input type="text" name="Apellido2" class="form-control" placeholder="Apellido2..." />
            </div>
            <div class="form-group">
            	<label for="Telefono">Telefono</label>
				<input type="text" name="Telefono" class="form-control" placeholder="Telefono..." />
            </div>
            
            <div class="form-group">
            	<label for="Correo">Correo</label>
				<input type="text" name="Correo" class="form-control" placeholder="Correo..." />
            </div>
            <div class="form-group">
            	<label for="Direccion">Direccion</label>
				<input type="text" name="Direccion" class="form-control" placeholder="Direccion..." />
            </div>
			<div class="form-group">
            	<label for="Fecha_Ingreso">Fecha Ingreso</label>
				<input type="date" name="Fecha_Ingreso" class="form-control" placeholder="YYYY-MM-DD" />
            </div>
			<div class="form-group">
            	<label for="Clave">Clave</label>
				<input type="text" name="Clave" class="form-control" placeholder="Clave..." />
            </div>
            
			<div class="form-group">
            	<div class="col-md-6">
				<label for="Genero_Id">Genero</label>
					<select class="form-control" id="Genero_Id" name="Genero_Id">
						@foreach ($Generos as $Genero)
							<option value="{{ $Genero->Id_Genero }}">{{ $Genero->Descripcion }}</option>
						@endforeach						
					</select>
				</div>
            </div>
			<div class="form-group">
            	<div class="col-md-6">
				<label for="Rol_Id">Rol</label>
					<select class="form-control" id="Rol_Id" name="Rol_Id">
						@foreach ($Rols as $Rol)
							<option value="{{ $Rol->Id_Rol}}">{{ $Rol->Descripcion}}</option>
						@endforeach						
					</select>
				</div>
            </div>
            
		
            <div class="form-group">
			
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection