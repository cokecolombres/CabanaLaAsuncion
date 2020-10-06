<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    protected $fillable = [
      'enlace',
      'remate_id'  
    ];

    public function remate()
    {
        return $this->belongsTo(Remate::class);
    }

    public function imagenes(){
        return $this->hasMany(Lote::class);
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
    return '/imagenes/lotes/no-image.jpg';
    }    
}
