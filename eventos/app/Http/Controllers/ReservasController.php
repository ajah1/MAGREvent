<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReservaCreateRequest;
use App\Http\Requests\ReservaModifyRequest;
use App\Reserva;
use Redirect;
use DB;

class ReservasController extends Controller
{
    public function index() {

        $reservas = Reserva::paginate(2);
        return view('reserva.index',compact('reservas'));
    }

    public function create() {

        return view('reserva.create');
    }

    public function store(ReservaCreateRequest $request) {

        \App\Reserva::create([

            'id' => $request['id'],
            'id_evento' => $request['id_evento'],
            'id_cliente' => $request['id_cliente'],
            'descripcion' => $request['descripcion'],
            'cod_barras' => $request['cod_barras'],
        ]);

        return Redirect::to('/reserva');
    }

    public function search(Request $req){
        
        $filtro = $req->get('tipo');
        $campo = $req->input('buscar');
        $orden = $req->get('orden');
        
        if($campo == null){
            $reservas=DB::table('reservas')->select('*')->orderby($filtro, $orden)->paginate();
        }
        else{
            $reservas=DB::table('reservas')->select('*')->where($filtro, 'like', '%'.$campo.'%')->orderby('id', $orden)->paginate();
        }

        return view('reserva.busqueda',compact('reservas'));
    }

    public function edit($id) {

        $reserva = Reserva::find($id);

        return view('reserva.edit', compact('reserva'));

    }

    public function update(ReservaModifyRequest $request, $id) {

        $reserva = Reserva::find($id);

        $reserva->fill($request->all());
        $reserva->save();

        return Redirect::to('/reserva');

    }

    public function borrar($id, $id_evento, $id_cliente) {

        Reserva::borrarElemento($id, $id_evento, $id_cliente);
    
        return Redirect::to('/reserva');
    }
}
