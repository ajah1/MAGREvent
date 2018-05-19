<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrada;
use Auth;
use DB;

class PagosController extends Controller
{
    
    public function index($id_evento,$id_cliente) {

        $contador = DB::table('reservas')->count();
        //dd($id_cliente);
        if($id_evento != null && $id_cliente != null){
            \App\Reserva::create([

                'id' => $contador,
                'id_evento' => $id_evento,
                'id_cliente' => $id_cliente,
                'descripcion' => '35475',
                'cod_barras' => 'estandar',
            ]);

        }
        
        if(Auth::User()){
            $entradas = Entrada::all();
            return view('pago.index',compact('entradas'));
        }
        else{
            return redirect('/login');
        }
    }
}
