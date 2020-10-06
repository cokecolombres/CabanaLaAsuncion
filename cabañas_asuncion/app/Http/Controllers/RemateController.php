<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use File;
use Auth;
use App\Remate;

use Illuminate\Http\Request;

class RemateController extends Controller
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
        return view('remates.list', compact('remates', 'title'));
    }
 
    public function create()
    {
        $title = 'Nuevo remate';
        return view('remates.create', compact('title'));
    }

    public function store(Request $request)
    {
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $path = public_path().'/imagenes/remate';
            $filename = uniqid(). $file->getClientOriginalName();
            $moved = $file->move($path, $filename);
        }

        if($request->hasFile('file')){
            $pdfFile = $request->file('file');
            $filePath = public_path().'/file/remate';
            $pdfFileName = uniqid(). $pdfFile->getClientOriginalName();
            $pdfMoved = $pdfFile->move($filePath, $pdfFileName);
        }
 
        $remate = Remate::create([
            'user_id' => auth()->user()->id,
            'imagen' => $filename,
            'titulo' => $request->titulo,
            'fecha' => $request->fecha,
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
        $title =  $remate->titulo;
        return view('remates.show', compact('remate', 'title'));
    }

    public function edit(Remate $remate)
    {
        //
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
