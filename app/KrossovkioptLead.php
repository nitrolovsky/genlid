<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KrossovkioptLead extends Model
{
    protected $fillable = [
        "name",
        "email",
        "phone",
        "source"
    ];
}
