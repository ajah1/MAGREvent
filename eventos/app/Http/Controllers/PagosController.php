<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrada;
use Auth;

class PagosController extends Controller
{
    public function index() {

        if(Auth::User()){
            $entradas = Entrada::all();
            return view('pago.index',compact('entradas'));
        }
        else{
            return redirect('/login');
        }
    }
}
