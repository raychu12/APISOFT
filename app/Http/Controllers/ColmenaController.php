<?php

namespace App\Http\Controllers;

use App\Colmena;
use App\Ubicacion;
use Illuminate\Http\Request;
use App\Http\Requests\ColmenaFormRequest;
use DB;

class ColmenaController extends Controller
{

    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));  //valida si la peticion trae el campo de busqueda 
        $colmenas = Colmena::with('ubicacion')
            ->where('Descripcion','LIKE','%'.$query.'%')
            ->orderby('Id_Colmena','desc')
            ->paginate(7);
        
        return view('Colmena.index', ['colmenas'=>$colmenas,"searchText"=>$query]);
    
    }

    public function create()
    {
        
        $ubicaciones = Ubicacion::all();
        //dd($ubicaciones);
        return view("Colmena.create",["ubicaciones"=> $ubicaciones]);
    }

   
    public function store(ColmenaFormRequest $request)
    {
        $colmena = Colmena::create($request->all());

        return redirect('colmena');  
    }

  
    public function show($id)
    {
        return view ("Colmena.show",["colmena"=>Colmena::findOrFail($id)]);
    }

 
    public function edit( $id)
    {
        return view ("Colmena.edit",["colmena"=>Colmena::findOrFail($id)]);
    }

   
    public function update(ColmenaRequestForm $request, $id)
    {
        $colmena= new Colmena;
        $colmena->Descripcion=$request->get('Descripcion');
        $colmena->Cantidad=$request->get('Cantidad');
        $colmena->Ubicacion_Id=$request->get('ubicacion_id');
        $colmena->update();
        return redirect('Colmena');
        
    }

    
    public function destroy($id)
    {
        $colmena=Colmena::findOrFail($id);
        $colmena->delete();
        return redirect('Colmena');
    }
}
