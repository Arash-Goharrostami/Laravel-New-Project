<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "sku",
        "mpn",
        "type",
        "price",
        "quantity",
        "numberOf",
        "productName",
    ];

    public function products()
    {
        return $this->belongsToMany(Order::class);
    }

}
