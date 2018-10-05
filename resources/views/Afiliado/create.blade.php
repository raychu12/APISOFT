@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Afiliado</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'Afiliado','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="Id_Afiliado">Cedula</label>
            	<input type="text" name="Id_Afiliado" class="form-control" placeholder="Id_Afiliado...">
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
            	<label for="Num_Cuenta">Numero cuenta</label>
				<input type="text" name="Num_Cuenta" class="form-control" placeholder="Num_Cuenta..." />
            </div>
            
			<div class="form-group">
            	<div class="col-md-6">
				<label for="genero_id">Genero</label>
					<select class="form-control" id="genero_id" name="genero_id">
						@foreach ($Generos as $Genero)
							<option value="{{ $Genero->Id_Genero }}">{{ $Genero->Descripcion }}</option>
						@endforeach						
					</select>
				</div>
            </div>
			<div class="form-group">
            	<div class="col-md-6">
				<label for="estado_civil_id">Rol</label>
					<select class="form-control" id="estado_civil_id" name="estado_civil_id">
						@foreach ($Estados as $estado)
							<option value="{{ $estado->Id_Estado_Civil}}">{{ $estado->Descripcion}}</option>
						@endforeach						
					</select>
				</div>
            </div>
            
            <div class="form-group">
            	<label for="Estado">Estado</label>
				<input type="text" name="Estado" class="form-control" placeholder="Estado" />
            </div>
            <div class="form-group">
			
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection