<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrada;

class PagosController extends Controller
{
    public function index() {

        $entradas = Entrada::all();
        return view('pago.index',compact('entradas'));
    }
}
