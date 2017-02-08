<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        "name",
        "email",
        "phone",
        "address",
        "comment",
        "product_id",
        "product_url",
        "status",
    ];
}
