@extends ('layouts.admin')
@section ('contenido')

	
			{!!Form::model($colmena,['method'=>'PATCH','route'=>['Colmena.update',$colmena->Id_Colmena]])!!}
            {{Form::token()}}
			<div class="form-group">
            	<label for="Descripcion">Descripcion</label>
            	<input type="text" name="Descripcion" class="form-control" value="{{$colmena->Descripcion}}" placeholder="Descripicion...">
            </div>
           
            <div class="form-group">
            	<label for="Cantidad">Cantidad</label>
            	<input type="text" name="Cantidad" class="form-control" value="{{$colmena->Cantidad}}" placeholder="Cantidad...">
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