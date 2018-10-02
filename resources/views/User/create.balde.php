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

			{!!Form::open(array('url'=>'User','method'=>'POST','autocomplete'=>'off'))!!}
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
            	<label for="Telefono">Segundo apellido</label>
				<input type="text" name="Apellido2" class="form-control" placeholder="Apellido2..." />
            </div>
            
            
            <div class="form-group">
            	<div class="col-md-6">
				<label for="ubicacion_id">Ubicacion</label>
					<select class="form-control" id="ubicacion_id" name="ubicacion_id">
						@foreach ($ubicaciones as $ubicacion)
							<option value="{{ $ubicacion->Id_Ubicacion }}">{{ $ubicacion->Descripcion }}</option>
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