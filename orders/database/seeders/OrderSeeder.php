<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        Order::create(['id'=>1,'customer_id'=>1,'seller_id'=>1,'orderDate'=>"2024-04-02"]);
        Order::create(['id'=>2,'customer_id'=>2,'seller_id'=>1,'orderDate'=>"2024-04-02"]);
        Order::create(['id'=>3,'customer_id'=>3,'seller_id'=>1,'orderDate'=>"2024-04-02"]);
        Order::create(['id'=>4,'customer_id'=>4,'seller_id'=>1,'orderDate'=>"2024-04-04"]);
        Order::create(['id'=>5,'customer_id'=>5,'seller_id'=>1,'orderDate'=>"2024-04-04"]);
        Order::create(['id'=>6,'customer_id'=>1,'seller_id'=>2,'orderDate'=>"2024-04-06"]);
        Order::create(['id'=>7,'customer_id'=>2,'seller_id'=>2,'orderDate'=>"2024-04-07"]);
        Order::create(['id'=>8,'customer_id'=>3,'seller_id'=>2,'orderDate'=>"2024-04-08"]);
        Order::create(['id'=>9,'customer_id'=>4,'seller_id'=>2,'orderDate'=>"2024-04-18"]);
        Order::create(['id'=>10,'customer_id'=>6,'seller_id'=>2,'orderDate'=>"2024-04-22"]);
        Order::create(['id'=>11,'customer_id'=>4,'seller_id'=>3,'orderDate'=>"2024-04-25"]);
        Order::create(['id'=>12,'customer_id'=>8,'seller_id'=>3,'orderDate'=>"2024-05-01"]);
        Order::create(['id'=>13,'customer_id'=>5,'seller_id'=>1,'orderDate'=>"2024-05-01"]);
        Order::create(['id'=>14,'customer_id'=>2,'seller_id'=>1,'orderDate'=>"2024-05-01"]);
        Order::create(['id'=>15,'customer_id'=>1,'seller_id'=>1,'orderDate'=>"2024-05-03"]);
        Order::create(['id'=>16,'customer_id'=>3,'seller_id'=>2,'orderDate'=>"2024-05-04"]);
        Order::create(['id'=>17,'customer_id'=>4,'seller_id'=>2,'orderDate'=>"2024-05-05"]);
        Order::create(['id'=>18,'customer_id'=>5,'seller_id'=>3,'orderDate'=>"2024-06-05"]);
        Order::create(['id'=>19,'customer_id'=>6,'seller_id'=>3,'orderDate'=>"2024-06-06"]);
        Order::create(['id'=>20,'customer_id'=>7,'seller_id'=>3,'orderDate'=>"2024-06-18"]);
        Order::create(['id'=>21,'customer_id'=>8,'seller_id'=>4,'orderDate'=>"2024-06-26"]);
        Order::create(['id'=>22,'customer_id'=>9,'seller_id'=>4,'orderDate'=>"2024-06-26"]);
        Order::create(['id'=>23,'customer_id'=>3,'seller_id'=>1,'orderDate'=>"2024-06-26"]);
      
    }
}
