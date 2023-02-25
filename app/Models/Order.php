<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "status",
        "sumOfPrice",
        "orderNumber",
        "sumOfProducts",
    ];

    public function products()
    {
        return $this->hasMany(Orderables::class, "order_id", "id");
    }

}
