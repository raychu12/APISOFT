<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Genero;
use App\Rol;
use Illuminate\Http\Request;
use App\Http\Requests\UsuarioFormRequest;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query=trim($request->get('searchText')); //valida si la peticion trae el campo de busqueda 
        $usuarios = Usuario::with('Genero', 'Rol') 
            ->where('Nombre','LIKE','%'.$query.'%')
            ->orderby('Id_Usuario','desc')
            ->paginate(7);
         
        return view('Usuario.index', ['usuarios'=>$usuarios,"searchText"=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Generos = Genero::all();
       
        $Rols = Rol::all();
        
    
        return view("Usuario.create",["Rols"=> $Rols], ["Generos"=> $Generos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioFormRequest $request)
    {
        $usuario = Usuario::create($request->all());

        return redirect('Usuario');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return view ("Usuario.show",["usuarios"=>Usuario::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        $usuario= User::find($id);
        return view('Usuario.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioFormRequest $request, $id)
    {
      $usuario= new Usuario;
  	  $usuario->Nombre->get('Nombre');
      $usuario->Apellido1->get('Apellido1');
  	  $usuario->Apellido2->get('Apellido1');
      $usuario->Telefono->get('Telefono');
  	  $usuario->Correo->get('Correo');
      $usuario->Direccion->get('Direccion');
  	  $usuario->Fecha_Ingreso->get('Fecha_Ingreo');
      $usuario->Clave->get('Clave');
	  $usuario->Genero_Id=$request->get('Genero_Id');
	  $usuario->Rol_Id=$request->get('Rol_Id');
      $usuario->update();  

      return redirect('Usuario');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario=Usuario::findOrFail($id);
        $usuario->delete();
        return redirect('Usuario');
    }
}
