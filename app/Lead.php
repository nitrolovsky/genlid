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
        "nar",
        "vn",
        "kol",
        "davl",
        "dlina",
        "dym",
        "kotel
    ];
}
