<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function formularioContacto()
    {
        return view('formulario-contacto'); // <-- tu blade
    }

    public function recibeFormulario(Request $request)
    {
        $validated = $request->validate(
            [
                'nombre'  => 'required|min:5',
                'correo'  => 'required|email',
                'mensaje' => 'required|min:10|max:255',
            ],
            [
                'nombre.required'  => 'El nombre es obligatorio.',
                'nombre.min'       => 'El nombre debe tener al menos 5 caracteres.',
                'correo.required'  => 'El correo es obligatorio.',
                'correo.email'     => 'El correo no es válido.',
                'mensaje.required' => 'El mensaje es obligatorio.',
                'mensaje.min'      => 'El mensaje debe tener al menos 10 caracteres.',
                'mensaje.max'      => 'El mensaje no puede exceder 255 caracteres.',
            ]
        );

        // ✅ Guardar en DB
        Contacto::create($validated);

        return back()->with('success', 'Mensaje guardado en la base de datos ✅');
    }
}