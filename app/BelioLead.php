<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BelioLead extends Model
{
    protected $fillable = [
        "name",
        "email",
        "phone",
        "source",
        "address",
        "size",
        "color"
    ];
}
