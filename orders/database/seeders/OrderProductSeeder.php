<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderProduct;

class OrderProductSeeder extends Seeder
{
    public function run(): void
    {
        OrderProduct::create(['order_id'=>1,'product_id'=>1,'quantity'=>1]); // Change 'amount' to 'quantity'
        OrderProduct::create(['order_id'=>1,'product_id'=>5,'quantity'=>1]);
        OrderProduct::create(['order_id'=>1,'product_id'=>9,'quantity'=>3]);
        OrderProduct::create(['order_id'=>2,'product_id'=>8,'quantity'=>2]);
        OrderProduct::create(['order_id'=>3,'product_id'=>2,'quantity'=>2]);
        OrderProduct::create(['order_id'=>3,'product_id'=>4,'quantity'=>4]);
        OrderProduct::create(['order_id'=>3,'product_id'=>3,'quantity'=>1]);
        OrderProduct::create(['order_id'=>3,'product_id'=>9,'quantity'=>5]);
        OrderProduct::create(['order_id'=>3,'product_id'=>10,'quantity'=>1]);
        OrderProduct::create(['order_id'=>4,'product_id'=>1,'quantity'=>3]);
        OrderProduct::create(['order_id'=>4,'product_id'=>2,'quantity'=>2]);
        OrderProduct::create(['order_id'=>4,'product_id'=>6,'quantity'=>1]);
        OrderProduct::create(['order_id'=>4,'product_id'=>11,'quantity'=>2]);
        OrderProduct::create(['order_id'=>5,'product_id'=>12,'quantity'=>3]);
        OrderProduct::create(['order_id'=>5,'product_id'=>11,'quantity'=>4]);
        OrderProduct::create(['order_id'=>5,'product_id'=>4,'quantity'=>7]);
        OrderProduct::create(['order_id'=>6,'product_id'=>5,'quantity'=>3]);
        OrderProduct::create(['order_id'=>6,'product_id'=>10,'quantity'=>2]);
        OrderProduct::create(['order_id'=>7,'product_id'=>4,'quantity'=>5]);
        OrderProduct::create(['order_id'=>8,'product_id'=>7,'quantity'=>3]);
        OrderProduct::create(['order_id'=>9,'product_id'=>8,'quantity'=>4]);
        OrderProduct::create(['order_id'=>10,'product_id'=>7,'quantity'=>5]);
        OrderProduct::create(['order_id'=>10,'product_id'=>13,'quantity'=>2]);
        OrderProduct::create(['order_id'=>10,'product_id'=>14,'quantity'=>2]);
        OrderProduct::create(['order_id'=>11,'product_id'=>6,'quantity'=>4]);
        OrderProduct::create(['order_id'=>11,'product_id'=>5,'quantity'=>4]);
        OrderProduct::create(['order_id'=>11,'product_id'=>15,'quantity'=>1]);
        OrderProduct::create(['order_id'=>12,'product_id'=>16,'quantity'=>1]);
        OrderProduct::create(['order_id'=>12,'product_id'=>1,'quantity'=>2]);
        OrderProduct::create(['order_id'=>12,'product_id'=>8,'quantity'=>2]);
        OrderProduct::create(['order_id'=>13,'product_id'=>17,'quantity'=>4]);
        OrderProduct::create(['order_id'=>13,'product_id'=>15,'quantity'=>4]);
        OrderProduct::create(['order_id'=>13,'product_id'=>5,'quantity'=>2]);
        OrderProduct::create(['order_id'=>14,'product_id'=>18,'quantity'=>4]);
        OrderProduct::create(['order_id'=>14,'product_id'=>5,'quantity'=>6]);
        OrderProduct::create(['order_id'=>15,'product_id'=>19,'quantity'=>3]);
        OrderProduct::create(['order_id'=>15,'product_id'=>18,'quantity'=>2]);
        OrderProduct::create(['order_id'=>16,'product_id'=>12,'quantity'=>2]);
        OrderProduct::create(['order_id'=>17,'product_id'=>14,'quantity'=>1]);
        OrderProduct::create(['order_id'=>18,'product_id'=>1,'quantity'=>4]);
        OrderProduct::create(['order_id'=>19,'product_id'=>9,'quantity'=>4]);
        OrderProduct::create(['order_id'=>20,'product_id'=>10,'quantity'=>1]);
        OrderProduct::create(['order_id'=>20,'product_id'=>11,'quantity'=>2]);
        OrderProduct::create(['order_id'=>20,'product_id'=>12,'quantity'=>3]);
        OrderProduct::create(['order_id'=>20,'product_id'=>16,'quantity'=>4]);
        OrderProduct::create(['order_id'=>21,'product_id'=>11,'quantity'=>1]);
        OrderProduct::create(['order_id'=>21,'product_id'=>12,'quantity'=>2]);
        OrderProduct::create(['order_id'=>21,'product_id'=>11,'quantity'=>3]);
        OrderProduct::create(['order_id'=>21,'product_id'=>14,'quantity'=>4]);
        OrderProduct::create(['order_id'=>21,'product_id'=>15,'quantity'=>10]);
        OrderProduct::create(['order_id'=>21,'product_id'=>10,'quantity'=>2]);
        OrderProduct::create(['order_id'=>21,'product_id'=>14,'quantity'=>3]);
        OrderProduct::create(['order_id'=>22,'product_id'=>7,'quantity'=>5]);
        OrderProduct::create(['order_id'=>22,'product_id'=>8,'quantity'=>1]);
        OrderProduct::create(['order_id'=>22,'product_id'=>7,'quantity'=>5]);
        OrderProduct::create(['order_id'=>22,'product_id'=>23,'quantity'=>1]);
        OrderProduct::create(['order_id'=>23,'product_id'=>24,'quantity'=>1]);
        OrderProduct::create(['order_id'=>23,'product_id'=>25,'quantity'=>1]);
        OrderProduct::create(['order_id'=>23,'product_id'=>26,'quantity'=>7]);
        OrderProduct::create(['order_id'=>23,'product_id'=>29,'quantity'=>1]);
        OrderProduct::create(['order_id'=>23,'product_id'=>27,'quantity'=>2]);
        OrderProduct::create(['order_id'=>23,'product_id'=>28,'quantity'=>2]);
        OrderProduct::create(['order_id'=>23,'product_id'=>26,'quantity'=>3]);
        OrderProduct::create(['order_id'=>23,'product_id'=>27,'quantity'=>3]);
        OrderProduct::create(['order_id'=>23,'product_id'=>28,'quantity'=>3]);
        OrderProduct::create(['order_id'=>23,'product_id'=>29,'quantity'=>3]);
    }
}
