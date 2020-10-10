<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'nombres',
        'email',
        'asunto',
        'mensaje'         
    ];
}
