<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderProduct;

class OrderProduct extends Model
{

    protected $table = 'orderproducts';

    protected $fillable = [
        'id',
        'order_id',
        'product_id',
        'quantity',
    ];
}
