<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class ContactosController extends Controller
{
    public function index() {

        // En un futur sols filtrar els admins que serem els membres del grupo
        // Email,telefono
        $users = Usuario::all();
        return view('contacto.index',compact('users'));
    }
}
