<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\NewsLetter;

class FrontController extends Controller
{
    public function indexNosotros()
    {
        $title = 'Quienes somos';
        return view('nosotros.index', compact('title'));
    }

    public function indexContacto()
    {
        $title = 'Contacto';
        return view('contacto.index', compact('title'));
    }

    public function mensajeContacto(Request $request)
    {
        $rules = [
            'nombres' => 'required|min:3|max:255',
            'email' => 'required|max:255|email',
            'asunto' => 'required|min:3|max:255',
            'mensaje' => 'required|min:10|max:500'
        ];

        $this->validate($request,$rules);

        $contacto = Contact::create([
            'nombres' => $request->nombres,
            'email' => $request->email,
            'asunto' => $request->asunto,
            'mensaje' => $request->mensaje   
        ]);

        return back();
    }

    public function newsLetter(Request $request)
    {
        $rules = [
            'nombres' => 'required|min:3|max:255',
            'email' => 'required|max:255|email|unique:newsletters'
        ];

        $this->validate($request, $rules);

        $newLetter = NewsLetter::create([
            'nombres' => $request->nombres,
            'email' => $request->email  
        ]);

        return back();
    }

}
