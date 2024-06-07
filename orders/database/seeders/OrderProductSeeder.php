<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderProduct;

class OrderProductSeeder extends Seeder
{
    public function run(): void
    {
        OrderProduct::create(['order_id'=>1,'product_id'=>1,'amount'=>1]);
        OrderProduct::create(['order_id'=>1,'product_id'=>5,'amount'=>1]);
        OrderProduct::create(['order_id'=>1,'product_id'=>9,'amount'=>3]);
        OrderProduct::create(['order_id'=>2,'product_id'=>8,'amount'=>2]);
        OrderProduct::create(['order_id'=>3,'product_id'=>2,'amount'=>2]);
        OrderProduct::create(['order_id'=>3,'product_id'=>4,'amount'=>4]);
        OrderProduct::create(['order_id'=>3,'product_id'=>3,'amount'=>1]);
        OrderProduct::create(['order_id'=>3,'product_id'=>9,'amount'=>5]);
        OrderProduct::create(['order_id'=>3,'product_id'=>10,'amount'=>1]);
        OrderProduct::create(['order_id'=>4,'product_id'=>1,'amount'=>3]);
        OrderProduct::create(['order_id'=>4,'product_id'=>2,'amount'=>2]);
        OrderProduct::create(['order_id'=>4,'product_id'=>6,'amount'=>1]);
        OrderProduct::create(['order_id'=>4,'product_id'=>11,'amount'=>2]);
        OrderProduct::create(['order_id'=>5,'product_id'=>12,'amount'=>3]);
        OrderProduct::create(['order_id'=>5,'product_id'=>11,'amount'=>4]);
        OrderProduct::create(['order_id'=>5,'product_id'=>4,'amount'=>7]);
        OrderProduct::create(['order_id'=>6,'product_id'=>5,'amount'=>3]);
        OrderProduct::create(['order_id'=>6,'product_id'=>10,'amount'=>2]);
        OrderProduct::create(['order_id'=>7,'product_id'=>4,'amount'=>5]);
        OrderProduct::create(['order_id'=>8,'product_id'=>7,'amount'=>3]);
        OrderProduct::create(['order_id'=>9,'product_id'=>8,'amount'=>4]);
        OrderProduct::create(['order_id'=>10,'product_id'=>7,'amount'=>5]);
        OrderProduct::create(['order_id'=>10,'product_id'=>13,'amount'=>2]);
        OrderProduct::create(['order_id'=>10,'product_id'=>14,'amount'=>2]);
        OrderProduct::create(['order_id'=>11,'product_id'=>6,'amount'=>4]);
        OrderProduct::create(['order_id'=>11,'product_id'=>5,'amount'=>4]);
        OrderProduct::create(['order_id'=>11,'product_id'=>15,'amount'=>1]);
        OrderProduct::create(['order_id'=>12,'product_id'=>16,'amount'=>1]);
        OrderProduct::create(['order_id'=>12,'product_id'=>1,'amount'=>2]);
        OrderProduct::create(['order_id'=>12,'product_id'=>8,'amount'=>2]);
        OrderProduct::create(['order_id'=>13,'product_id'=>17,'amount'=>4]);
        OrderProduct::create(['order_id'=>13,'product_id'=>15,'amount'=>4]);
        OrderProduct::create(['order_id'=>13,'product_id'=>5,'amount'=>2]);
        OrderProduct::create(['order_id'=>14,'product_id'=>18,'amount'=>4]);
        OrderProduct::create(['order_id'=>14,'product_id'=>5,'amount'=>6]);
        OrderProduct::create(['order_id'=>15,'product_id'=>19,'amount'=>3]);
        OrderProduct::create(['order_id'=>15,'product_id'=>18,'amount'=>2]);
        OrderProduct::create(['order_id'=>16,'product_id'=>12,'amount'=>2]);
        OrderProduct::create(['order_id'=>17,'product_id'=>14,'amount'=>1]);
        OrderProduct::create(['order_id'=>18,'product_id'=>1,'amount'=>4]);
        OrderProduct::create(['order_id'=>19,'product_id'=>9,'amount'=>4]);
        OrderProduct::create(['order_id'=>20,'product_id'=>10,'amount'=>1]);
        OrderProduct::create(['order_id'=>20,'product_id'=>11,'amount'=>2]);
        OrderProduct::create(['order_id'=>20,'product_id'=>12,'amount'=>3]);
        OrderProduct::create(['order_id'=>20,'product_id'=>16,'amount'=>4]);
        OrderProduct::create(['order_id'=>21,'product_id'=>11,'amount'=>1]);
        OrderProduct::create(['order_id'=>21,'product_id'=>12,'amount'=>2]);
        OrderProduct::create(['order_id'=>21,'product_id'=>11,'amount'=>3]);
        OrderProduct::create(['order_id'=>21,'product_id'=>14,'amount'=>4]);
        OrderProduct::create(['order_id'=>21,'product_id'=>15,'amount'=>10]);
        OrderProduct::create(['order_id'=>21,'product_id'=>10,'amount'=>2]);
        OrderProduct::create(['order_id'=>21,'product_id'=>14,'amount'=>3]);
        OrderProduct::create(['order_id'=>22,'product_id'=>7,'amount'=>5]);
        OrderProduct::create(['order_id'=>22,'product_id'=>8,'amount'=>1]);
        OrderProduct::create(['order_id'=>22,'product_id'=>7,'amount'=>5]);
        OrderProduct::create(['order_id'=>22,'product_id'=>23,'amount'=>1]);
        OrderProduct::create(['order_id'=>23,'product_id'=>24,'amount'=>1]);
        OrderProduct::create(['order_id'=>23,'product_id'=>25,'amount'=>1]);
        OrderProduct::create(['order_id'=>23,'product_id'=>26,'amount'=>7]);
        OrderProduct::create(['order_id'=>23,'product_id'=>29,'amount'=>1]);
        OrderProduct::create(['order_id'=>23,'product_id'=>27,'amount'=>2]);
        OrderProduct::create(['order_id'=>23,'product_id'=>28,'amount'=>2]);
        OrderProduct::create(['order_id'=>23,'product_id'=>26,'amount'=>3]);
        OrderProduct::create(['order_id'=>23,'product_id'=>27,'amount'=>3]);
        OrderProduct::create(['order_id'=>23,'product_id'=>28,'amount'=>3]);
        OrderProduct::create(['order_id'=>23,'product_id'=>29,'amount'=>3]);
              
    }
}
