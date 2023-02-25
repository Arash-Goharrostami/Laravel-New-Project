<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderables extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "quantity",
        "order_id",
        "product_id",
    ];
}
