<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TipoCreateRequest;
use App\Http\Requests\TipoModifyRequest;
use App\Tipo;
use Redirect;
use DB;

class TiposController extends Controller
{
    public function index() {

        $tipos = Tipo::paginate(2);
        return view('tipo.index',compact('tipos'));
    }

    public function create() {

        return view('tipo.create');
    }

    public function store(TipoCreateRequest $request) {

        \App\Tipo::create([

            'tipo_entrada' => $request['tipo_entrada'],
            'precio' => $request['precio'],
        ]);

        return Redirect::to('/tipo');
    }

    public function edit($id) {

        $tipo = Tipo::find($id);

        return view('tipo.edit', compact('tipo'));

    }

    public function update(TipoModifyRequest $request, $id) {

        $tipo = Tipo::find($id);

        $tipo->fill($request->all());
        $tipo->save();

        return Redirect::to('/tipo');

    }

    public function search(Request $req){
        
        $filtro = $req->get('tipo');
        $campo = $req->input('buscar');
        $orden = $req->get('orden');
        
        if($campo == null){
            $tipos=DB::table('tipos')->select('*')->orderby($filtro, $orden)->paginate();
        }
        else{
            $tipos=DB::table('tipos')->select('*')->where($filtro, 'like', '%'.$campo.'%')->orderby('id', $orden)->paginate();
        }

        return view('tipo.busqueda',compact('tipos'));
    }

    public function destroy($id) {

        $tipo = Tipo::find($id);

        $tipo->delete();

        return Redirect::to('/tipo');
    }
}
