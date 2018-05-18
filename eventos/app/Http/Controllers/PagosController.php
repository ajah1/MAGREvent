<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrada;
use Mail;
use Redirect;

class PagosController extends Controller
{
    public function index() {

        $entradas = Entrada::all();
        return view('pago.index',compact('entradas'));
    }

    public function correo(Request $request) {

        $data['name'] = $request['username'];
        $data['numero'] = $request['cardNumber'];
        $data['correo'] = "magrevent@gmail.com";
        $data['envio'] = "javimonlloralcaraz@gmail.com";

        Mail::send('email.pago', ['data' => $data], function($mail) use($data){
            
            $mail->from($data['correo'],"MAGREvent");
            $mail->to($data['envio'])->subject('Compra de producto realizada');
        });

        return Redirect::to('/');

    }
}
