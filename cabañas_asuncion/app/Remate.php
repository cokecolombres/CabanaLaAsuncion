<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remate extends Model
{
    protected $fillable = [
        'user_id',
        'imagen',
        'titulo',
        'fecha',
        'organiza',
        'streaming',
        'email',
        'file',
        'enlaces'
    ];

    public function lotes()
    {
        return $this->hasMany(Lote::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }    
}
