<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = [
        'page_id',
        'name',
        'email',
        'phone',
        'owner_id',
        'template',
        'status'
    ];
}
