<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoteImage extends Model
{
    protected $fillable = [
        'imagen',
        'featured',
        'lote_id'
    ];

    public function lote(){
        return $this->belongsTo(Lote::class);
    }

    public function getUrlAttribute()
    {
        if(substr($this->imagen,0,4)=== "http"){
            return $this->imagen;
        }
        return '/imagenes/remate/lotes/' . $this->imagen;
    }    
}
