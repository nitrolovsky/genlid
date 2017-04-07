<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeautykitchenLead extends Model
{
    protected $fillable = [
        "name",
        "email",
        "phone",
        "source"
    ];
}
