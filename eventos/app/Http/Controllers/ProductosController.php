<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use DB;


class ProductosController extends Controller
{

    public function index($id) {

        // Modificar coses
        $eventos = DB::table('eventos')->
        join('entradas','cod_evento', '=', $id)->
        join('tipos','tipos.id','=','entradas.tipoEntrada')->where('eventos.id',$id)->
        select('eventos.nombre','eventos.id','eventos.imagen', 'eventos.descripcion', 'eventos.fecha_inicio','eventos.fecha_fin', 'tipos.tipo_entrada','tipos.precio')
        ->get();
        //Evento::find($id);
        //dd($eventos);
        return view('producto.index', compact('eventos'));
        
        
        
    }
}
