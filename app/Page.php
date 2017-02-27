<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'user_id',
        'status',
        'descriptor',
        'phone',
        'offer',
        'bg',
        'video',
        'details',
        'form_title',
        'call_to_action',
        'legal',
        'email',
        "company"
    ];
}
