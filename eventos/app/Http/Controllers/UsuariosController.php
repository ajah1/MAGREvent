<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsuarioCreateRequest;
use App\Http\Requests\UsuarioModifyRequest;
use App\Usuario;
use Redirect;
use DB;

class UsuariosController extends Controller
{
    public function index() {

        $users = User::paginate(2);
        return view('usuario.index',compact('users'));
    }

    public function create() {

        return view('usuario.create');
    }

    public function store(UsuarioCreateRequest $request) {

        \App\User::create([

            'dni' => $request['dni'],
            'name' => $request['name'],
            'apellidos' => $request['apellidos'],
            'email' => $request['email'],
            'edad' => $request['edad'],
            'direccion' => $request['direccion'],
            'tipo' => $request['tipo'],
            'username' => $request['username'],
            'password' => bcrypt($request['password']),
        ]);

        return Redirect::to('/usuario');
    }

    public function edit($id) {

        $user = User::find($id);

        return view('usuario.edit', compact('user'));

    }

    public function update(UsuarioModifyRequest $request, $id) {

        $user = User::find($id);

        $user->fill($request->all());
        $user->save();

        return Redirect::to('/usuario');

    }

    public function search(Request $req){

       
        $filtro = $req->get('tipo');
        $campo = $req->input('buscar');
        $orden = $req->get('orden');
        //dd($filtro,$campo,$orden);
        
        //$users = Usuario::buscar($filtro,$campo,$orden);
        if($campo == null){
            $users=DB::table('users')->select('*')->orderby($filtro, $orden)->paginate();
        }
        else{
            $users=DB::table('users')->select('*')->where($filtro, 'like', '%'.$campo.'%')->orderby('id', $orden)->paginate();
        }
        
       
         
        return view('usuario.busqueda',compact('users'));
    }

    public function destroy($id) {

        $user = User::find($id);

        $user->delete();

        return Redirect::to('/usuario');
    }
}
