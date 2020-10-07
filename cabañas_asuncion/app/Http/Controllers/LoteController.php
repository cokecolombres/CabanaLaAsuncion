<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lote;
use App\Remate;

class LoteController extends Controller
{
    public function store(Request $request, $id)
    {
        $rules = [
        'titulo' => 'required|min:4|max:190',
        'enlace' => 'required|min:4|max:800',
        ];

        if($request->descripcion){
            $rules = [
                'descripcion' => 'required|min:4|max:500',
            ];
        }        

        $this->validate($request, $rules);

        Lote::create([
            'titulo' => $request->titulo,
            'enlace' => $request->enlace,
            'descripcion' => $request->descripcion,
            'remate_id' => $id,
        ]);

        return redirect()->back();
    }
}
