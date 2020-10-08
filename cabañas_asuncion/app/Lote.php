<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    protected $fillable = [
      'titulo',
      'enlace',
      'descripcion',
      'remate_id'  
    ];

    public function remate()
    {
        return $this->belongsTo(Remate::class);
    }

    public function imagenes(){
        return $this->hasMany(LoteImage::class);
    } 
    
    public function getFeaturedImagenUrlAttribute()
    {

    $featuredImage = $this->imagenes()->where('featured',true)->first();
    
    if(!$featuredImage){
    $featuredImage = $this->imagenes()->first();
    }

    if($featuredImage){
        return $featuredImage->url;
    }
    return '/imagenes/remate/lotes/no-image.jpg';
    }    
}
