<?php

namespace App\Http\Controllers;
use DB;
use App\Ubicacion;
use Illuminate\Http\Request;

use Illuminate\Http\Redirect;

use App\Http\Requests\UbicacionFormRequest;


class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    { 
         if ($request)
        {
            $query=trim($request->get('searchText'));
            $ubicacion=DB::table('ubicacions')->where('Descripcion','LIKE','%'.$query.'%')
            ->orderby('Id_Ubicacion','desc')
            ->paginate(7);
            return view('Ubicacion.index',["ubicacion"=>$ubicacion,"searchText"=>$query]);
        }
    }

   
    public function create()
    {
        return view("Ubicacion.create");
    }

    
    public function store(UbicacionFormRequest $request)
    {
        $ubicacion= new Ubicacion;
        $ubicacion->Descripcion=$request->get('Descripcion');
        $ubicacion->save();
        return redirect('Ubicacion');
    }

    public function show($id)
    {
        return view ("Ubicacion.show",["ubicacion"=>Ubicacion::findOrFail($id)]);
    }

   
    public function edit($id)
    {
        return view ("Ubicacion.edit",["ubicacion"=>Ubicacion::findOrFail($id)]);
    }

  
    public function update(UbicacionFormRequest $request, $id)
    {
        
    $ubicacion=Ubicacion::findOrFail($id);
    $ubicacion->Descripcion=$request->get('Descripcion');
    $ubicacion->update();
    return redirect('Ubicacion');
    }


    public function destroy( $id)
    {
    $ubicacion=Ubicacion::findOrFail($id);
    $ubicacion->delete();
    return redirect('Ubicacion');
 
    }
}
