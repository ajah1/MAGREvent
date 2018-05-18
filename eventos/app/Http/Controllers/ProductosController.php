<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;


class ProductosController extends Controller
{

    public function index($id) {

        // Modificar coses
        $eventos = Evento::find($id);
        $valor = $eventos->nombre;
        //dd($eventos);
        return view('producto.index')->with('valor',$valor);
        
        
        
    }
}
