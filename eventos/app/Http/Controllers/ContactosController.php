<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Mail;
use Redirect;

class ContactosController extends Controller
{
    public function index() {

        // En un futur sols filtrar els admins que serem els membres del grupo
        // Email,telefono
        $users = Usuario::all();
        return view('contacto.index',compact('users'));
    }

    public function correo(Request $request) {

        $data['name'] = $request['name'];
        $data['correo'] = $request['email'];
        $data['mensaje'] = $request['message'];
        $data['email'] = "magrevent@gmail.com";

        Mail::send('email.contacto', ['data' => $data], function($mail) use($data){

            $mail->subject('Contacta con nosotros');
            $mail->to($data['email'], $data['name']);
        });

        return Redirect::to('/');

    }
}
