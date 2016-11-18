<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'brand',
        'phone',
        'descriptor',
        'video',
        'profit',
        'form_title',
        'call_to_action',
        'legal',
        'email',
        'status',
        'user_id',
        'bg'
    ];
}
