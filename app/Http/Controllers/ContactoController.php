<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required'
        ]); //Valido los datos ingresados en el formulario. Solo me fijo que no sean nulos y que el email sea una dirección válida

        $correo = new ContactoMailable($request->all()); //Creo el correo con todos los datos ingresados en el formulario

        Mail::to($request['email'])->send($correo); //Envío el mensaje al email ingresado

        return redirect()->route('contacto.index')->with('message', 'Mensaje enviado'); //Redirecciono a la página del formulario y envió un mensaje de sesion
    }
}
