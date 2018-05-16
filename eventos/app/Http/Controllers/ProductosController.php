<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;


class ProductosController extends Controller
{

    public function index() {

        // Modificar coses
        $eventos = Evento::all();
        return view('producto.index',compact('eventos'));
        
        
        
    }
}
