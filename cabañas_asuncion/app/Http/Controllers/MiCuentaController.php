<?php

namespace App\Http\Controllers;
use File;
use DateTime;
use Auth;
use App\Remate;
use Illuminate\Http\Request;

class MiCuentaController extends Controller
{
    public function index()
    {
        $remate = Remate::all()->last();
        $title =  $remate->titulo;
        return view('remates.index', compact('remate', 'title'));
    }

    public function list()
    {
        $remates = Remate::orderBy('created_at','desc')->paginate(20);
        $title = 'Lista de remates';
        return view('home', compact('remates', 'title'));
    }
 
    public function create()
    {
        $title = 'Nuevo remate';
        return view('remates.create', compact('title'));
    }

    public function store(Request $request)
    {
        $rules = [
        'titulo' => 'required|min:4|max:200',
        'fecha' => 'required|date|after:created_at',
        'hora' => 'required|min:1|max:8',
        'organiza' => 'required|min:4|max:200',
        'streaming' => 'required|min:4|max:200',
        'email' => 'required|email',
        ];

        if($request->imagen){
            $rules = [
                'imagen.required' => 'La imagen debe ser jpeg, bmp o png',
            ];
        }

        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $path = public_path().'/imagenes/remate';
            $filename = uniqid(). $file->getClientOriginalName();
            $moved = $file->move($path, $filename);
        }

        if($request->file){
            $rules = [
                'archivo' => 'required|mimes:pdf'
            ];
        }

        if($request->hasFile('archivo')){
            $pdfFile = $request->file('archivo');
            $filePath = public_path().'/file/remate';
            $pdfFileName = uniqid(). $pdfFile->getClientOriginalName();
            $pdfMoved = $pdfFile->move($filePath, $pdfFileName);
        }

        $this->validate($request, $rules);
 
        $remate = Remate::create([
            'user_id' => auth()->user()->id,
            'imagen' => $filename,
            'titulo' => $request->titulo,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'organiza' => $request->organiza,
            'streaming' => $request->streaming,
            'email' => $request->email,
            'file' => $pdfFileName,
            'enlaces' => $request->enlaces
        ]);

        return redirect()->back();
    }

    public function show($id)
    {
        $remate = Remate::find($id);
        $lotes = $remate->lotes()->orderBy('created_at', 'ASC')->get();
        $title =  'Crear lote para '.$remate->titulo;
        return view('remates.show', compact('remate', 'title','lotes'));
    }

    public function edit($id)
    {
        $remate = Remate::find($id);
        $title =  'Editar remate ' .$remate->titulo;
        return view('remates.edit', compact( 'title','remate'));        
    }

    public function update(Request $request, Remate $remate)
    {
        //
    }

    public function destroy(Remate $remate)
    {
        //
    }
}
