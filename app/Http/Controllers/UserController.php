<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use DB\Usuario;
use APP\Genero;
use APP\Rol ;
use Session;
use Redirect;
use App\Http\Requests\UserFormRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;



class UserController extends Controller
{
    
    public function index(Request $request)
    {
        $query=trim($request->get('searchText')); //valida si la peticion trae el campo de busqueda 
        $Usuario = User::with('genero', 'rol')
            ->where('Nombre','LIKE','%'.$query.'%')
            ->orderby('Id_Usuario','desc')
            ->paginate(7);
       // dd($colmenas);
        return view('User.index', ['Usuario'=>$Usuario,"searchText"=>$query]);
    }
   
    public function create()
    {
        $gene = Genero::all();
        $rols = Rol::all();
        //dd($ubicaciones);
        return view("Usuario.create",["gene"=> $gene]);
        return view("Usuario.create",["rols"=> $rols]);
    }
   
    public function store(UserRequest $request)
    {
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        Session::flash('message','Usuario creado correctamente');
        return redirect::to('admin/users');
    }
  
    public function show($id)
    {
        return view ("Usuario.show",["usuario"=>Usuario::findOrFail($id)]);
    }
  
    public function edit($id)
    {
        $user= User::find($id);
       return view('Usuario.edit',compact('user'));
    }
   
    public function update(Request $request, $id)
    {
         $user= User::find($id);
         $user->fill($request->all());
         $user->save();
         Session::flash('message','Usuario actualizado correctamente');
        return redirect::to('admin/users');
         
    }
   
    public function destroy($id)
    {
        
        $user= User::find($id);
        $user->delete();
      Session::flash('message','Usuario eliminado correctamente');
        return redirect::to('admin/users');
    }
}