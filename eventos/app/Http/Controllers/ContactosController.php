<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Mail;
use Redirect;

class ContactosController extends Controller
{
    
    public function indexA() {

        // En un futur sols filtrar els admins que serem els membres del grupo
        // Email,telefono
        $usuario = "Alvaro";
        return view('contacto.index')->with('usuario',$usuario);
    }

    public function indexJ() {

        // En un futur sols filtrar els admins que serem els membres del grupo
        // Email,telefono
        $usuario = "Javier";
        return view('contacto.index')->with('usuario',$usuario);
    }

    public function indexJu() {

        // En un futur sols filtrar els admins que serem els membres del grupo
        // Email,telefono
        $usuario = "Juan";
        return view('contacto.index')->with('usuario',$usuario);
    }

    public function indexAl() {

        // En un futur sols filtrar els admins que serem els membres del grupo
        // Email,telefono
        $usuario = "Alejandro";
        return view('contacto.index')->with('usuario',$usuario);
    }

    public function correo(Request $request) {

        $data['name'] = $request['name'];
        $data['correo'] = $request['email'];
        $data['mensaje'] = $request['message'];
        $data['email'] = "magrevent@gmail.com";

        Mail::send('email.contacto', ['data' => $data], function($mail) use($data){
            
            $mail->from($data['correo'],$data['name']);
            $mail->to($data['email'])->subject('Contacta con nosotros');
        });

        return Redirect::to('/');

    }
}
