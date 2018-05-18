<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EntradaCreateRequest;
use App\Http\Requests\EntradaModifyRequest;
use App\Entrada;
use Redirect;
use DB;

class EntradasController extends Controller
{
    public function index() {

        $entradas = Entrada::paginate(2);
        return view('entrada.index',compact('entradas'));
    }

    public function create() {

        return view('entrada.create');
    }

    public function store(EntradaCreateRequest $request) {

        \App\Entrada::create([

            'id' => $request['id'],
            'cod_evento' => $request['cod_evento'],
            'tipoEntrada' => $request['tipoEntrada'],
            'validacion' => $request['validacion'],
            'informacion' => $request['informacion'],
        ]);

        return Redirect::to('home');
    }

    public function edit($id) {

        $entrada = Entrada::find($id);

        return view('entrada.edit', compact('entrada'));

    }

    public function update(EntradaModifyRequest $request, $id) {

        $entrada = Entrada::find($id);

        $entrada->fill($request->all());
        $entrada->save();

        return Redirect::to('/entrada');

    }

    public function search(Request $req){
        
        $filtro = $req->get('tipo');
        $campo = $req->input('buscar');
        $orden = $req->get('orden');
        
        if($campo == null){
            $entradas=DB::table('entradas')->select('*')->orderby($filtro, $orden)->paginate();
        }
        else{
            $entradas=DB::table('entradas')->select('*')->where($filtro, 'like', '%'.$campo.'%')->orderby('id', $orden)->paginate();
        }

        return view('entrada.busqueda',compact('entradas'));
    }

    public function destroy($id) {

        $entrada = Entrada::find($id);

        $entrada->delete();

        return Redirect::to('/entrada');
    }

    public function newEntrada(){
        return Redirect::to('entrada/create');
    }
}
