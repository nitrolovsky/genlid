<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'source',
        "calc",
        "nar",
        "vn",
        "kol",
        "davl",
        "dlina",
        "dym",
        "kotel"
    ];
}
