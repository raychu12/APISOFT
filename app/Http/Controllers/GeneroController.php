<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;
use Illuminate\Http\Redirect;
use App\Http\Requests\GeneroFormRequest;
use DB;


class GeneroController extends Controller
{
public function __construct()
{

}


/*INDEEEEEEEEEEEEX*/
public function index(Request $request)
{
        if ($request)
    {
        $query=trim($request->get('searchText'));
        $genero=DB::table('Genero')->where('Descripcion','LIKE','%'.$query.'%')
        ->orderby('Id_Genero','desc')
        ->paginate(7);
        return view('Genero.index',["genero"=>$genero,"searchText"=>$query]);
    }
}


/*CREEEEEEEEA*/
 
public function create()
{
    return view("Genero.create");
  
}


/*GUARDAAAAAAAA*/
public function store(GeneroFormRequest $request )
{
  $genero= new Genero;
  $genero->Descripcion=$request->get('Descripcion');
  $genero->save();
  return redirect('Genero');

}



/*MUUUUUUESTRA*/
public function show($id)
{
return view ("Genero.show",["genero"=>Genero::findOrFail($id)]);

  
}


/*EDITAAAAAAAAAAAA*/
public function edit($id)
{
    return view ("Genero.edit",["genero"=>Genero::findOrFail($id)]);
    
  
}

/*ACTUALIZAAAAAAAAAAAA*/

public function update(GeneroFormRequest $request, $id)
{
    $genero=Genero::findOrFail($id);
    $genero->Descripcion=$request->get('Descripcion');
    $genero->update();
    return redirect('Genero');
}


/*DELETEEEEEE*/
public function destroy($id)
{
    $genero=Genero::findOrFail($id);
    $genero->delete();
    return redirect('Genero');
 
}
 
 
 
 
    //
}
