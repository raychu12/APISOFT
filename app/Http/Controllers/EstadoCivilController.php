<?php

namespace App\Http\Controllers;

use App\Estado_Civil;
use Illuminate\Http\Request;
use Illuminate\Http\Redirect;
use App\Http\Requests\Estado_CivilFormRequest;
use DB;

class EstadoCivilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $estado_Civil=DB::table('Estado_Civil')->where('Descripcion','LIKE','%'.$query.'%')
            ->orderby('Id_Estado_Civil','desc')
            ->paginate(7);
            return view('Estado_Civil.index',["estado_Civil"=>$estado_Civil,"searchText"=>$query]);
        }
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Estado_Civil.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *///GUARDAR
    public function store(Estado_CivilFormRequest $request)
    {
        //
        $estado_Civil= new Estado_Civil;
        $estado_Civil->Descripcion=$request->get('Descripcion');
        $estado_Civil->save();
        return redirect('Estado_Civil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estado_Civil  $estado_Civil
     * @return \Illuminate\Http\Response
     *
     *///muestra
    public function show(Estado_Civil $estado_Civil)
    {
        //
        return view ("Estado_Civil.show",["estado_Civil"=>Estado_Civil::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estado_Civil  $estado_Civil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view ("Estado_Civil.edit",["estado_Civil"=>Estado_Civil::findOrFail($id)]);
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estado_Civil  $estado_Civil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado_Civil $estado_Civil)
    {
        //
        $estado_Civil=Estado_Civil::findOrFail($id);
        $estado_Civil->Descripcion=$request->get('Descripcion');
        $estado_Civil->update();
        return redirect('Estado_Civil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estado_Civil  $estado_Civil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
    $estado_Civil=Estado_Civil::findOrFail($id);
    $estado_Civil->delete();
    return redirect('Estado_Civil');
    }
}
