<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estanon;
use Illuminate\Http\Redirect;
use App\Http\Requests\EstanonFormRequest;
use DB;


class EstanonController extends Controller
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
        $estanon=DB::table('estanons')->where('Id_Estanon','LIKE','%'.$query.'%')
        ->orderby('Id_Estanon','desc')
        ->paginate(7);
        return view('Estanon.index',["estanon"=>$estanon,"searchText"=>$query]);


    }
}


/*CREEEEEEEEA*/
 
public function create()
{
    return view("Estanon.create");
  
}


/*GUARDAAAAAAAA*/
public function store(EstanonFormRequest $request )
{
  $estanon= new Estanon;
  $estanon->Peso=$request->get('Peso');
  $estanon->Fecha=$request->get('Fecha');
  $estanon->save();
  return redirect('Estanon');  

}



/*MUUUUUUESTRA*/
public function show($id)
{
return view ("Estanon.show",["estanon"=>Estanon::findOrFail($id)]);

  
}


/*EDITAAAAAAAAAAAA*/
public function edit($id)
{
    return view ("Estanon.edit",["estanon"=>Estanon::findOrFail($id)]);
    
  
}

/*ACTUALIZAAAAAAAAAAAA*/

public function update(EstanonFormRequest $request, $id)
{
    $estanon=Estanon::findOrFail($id);
    $estanon->Peso=$request->get('Peso');
    $estanon->Fecha=$request->get('Fecha');
    $estanon->update();
    return redirect('Estanon');
}


/*DELETEEEEEE*/
public function destroy($id)
{
    $estanon=Estanon::findOrFail($id);
    $estanon->delete();
    return redirect('Estanon');
 
}
 
 
 
 
    //
}
