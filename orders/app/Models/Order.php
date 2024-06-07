<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;


class Order extends Model
{

    protected $table = 'orders';

    protected $fillable = [
        'customer_id',
        'seller_id',
        'orderDate',
    ];
}

