<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use Redirect;
use App\Http\Requests\EventoCreateRequest;
use App\Http\Requests\EventoModifyRequest;
use DB;

class EventosController extends Controller
{
    public function index() {

        $eventos = Evento::all();
       
        return view('index',compact('eventos'));
    }

    public function create() {

        return view('evento.create');
    }

    public function store(EventoCreateRequest $request) {
        
        $valor = $request['imagen'];
        $resultado = $valor->getClientOriginalName();
        
        \App\Evento::create([

            'nombre' => $request['nombre'],
            'fecha_inicio' => $request['fecha_inicio'],
            'fecha_fin' => $request['fecha_fin'],
            'descripcion' => $request['descripcion'],
            'imagen' => $request['imagen']->store('')
        ]);

        return Redirect::to('home');

    }

    public function edit($id) {

        $evento = Evento::find($id);

        return view('evento.edit', compact('evento'));

    }

    public function update(EventoModifyRequest $request, $id) {

        $evento = Evento::find($id);

        $evento->fill($request->all());
        $evento->save();

        return Redirect::to('/evento');

    }

    public function search(Request $req){
        
        $filtro = $req->get('tipo');
        $campo = $req->input('buscar');
        $orden = $req->get('orden');
        
        if($campo == null){
            $eventos=DB::table('eventos')->select('*')->orderby($filtro, $orden)->paginate();
        }
        else{
            $eventos=DB::table('eventos')->select('*')->where($filtro, 'like', '%'.$campo.'%')->orderby('id', $orden)->paginate();
        }

        return view('evento.busqueda',compact('eventos'));
    }

    public function destroy($id) {

        $evento = Evento::find($id);

        $evento->delete();

        return Redirect::to('/evento');
    }

    public function newEvento(){
        return Redirect::to('evento/create');
    }

}
