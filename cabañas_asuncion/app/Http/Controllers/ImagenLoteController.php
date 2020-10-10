<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lote;
use App\LoteImage;
use File;

class ImagenLoteController extends Controller
{
    public function index($id)
    {
        $lote = Lote::find($id);
        $imagenes = $lote->imagenes()->orderBy('featured','DESC')->get();
        $title = 'Imagenes de '.$lote->titulo;
        return view('remates.lotes.galeria.index', compact('title','lote','imagenes'));
    }

    public function store(Request $request, $id)
    {
        $file = $request->file('imagen');
        $path = public_path().'/imagenes/remate/lotes';
        $filename = uniqid(). $file->getClientOriginalName();
        $moved = $file->move($path, $filename);

        if($moved){
        $loteImage = new LoteImage();
        $loteImage->imagen = $filename;
        $loteImage->lote_id = $id;
        $loteImage->save();
        }        
        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        $loteImage = LoteImage::find($request->imagen_id);
        if(substr($loteImage->imagen, 0, 4) === "http"){
            $deleted = true;
        }else{
            $fullPath = public_path().'/imagenes/remate/lotes/'.$loteImage->imagen;
            $deleted = File::delete($fullPath);
        }
        if($deleted){
            $loteImage->delete();
        }
        return back();
    }

    public function select($lote, $id)
    {
        LoteImage::where('lote_id',$lote)->update([
            'featured' => false
        ]);

        $loteImage = LoteImage::find($id);
        $loteImage->featured = true;
        $loteImage->save();

        return back();
    }    
}
