<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrada;
use Auth;
use DB;
use Mail;
use Redirect;

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
