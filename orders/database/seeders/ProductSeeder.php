<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {

        Product::create(['id'=>1,'name'=>"Nike Air",'description'=>"Sportschoen Modern",'price'=>119.99,'subcategory_id'=>1]);
        Product::create(['id'=>2,'name'=>"Nike Jordan",'description'=>"Sportschoen Luxe",'price'=>143.99,'subcategory_id'=>1]);
        Product::create(['id'=>3,'name'=>"Adidas Indoor",'description'=>"Sportschoen",'price'=>99.99,'subcategory_id'=>1]);
        Product::create(['id'=>4,'name'=>"Puma Ultra",'description'=>"Sportschoen Hoog",'price'=>129.99,'subcategory_id'=>1]);
        Product::create(['id'=>5,'name'=>"Laars zwart",'description'=>"Zwarte laars",'price'=>89.99,'subcategory_id'=>2]);
        Product::create(['id'=>6,'name'=>"Laars bruin",'description'=>"Bruine laars",'price'=>89.99,'subcategory_id'=>2]);
        Product::create(['id'=>7,'name'=>"Laars beige",'description'=>"Beige laars",'price'=>89.99,'subcategory_id'=>2]);
        Product::create(['id'=>8,'name'=>"Laars laag",'description'=>"Lage zwarte laars",'price'=>69.99,'subcategory_id'=>2]);
        Product::create(['id'=>9,'name'=>"Wit Veterschoen",'description'=>"Model autoverkoper",'price'=>49.99,'subcategory_id'=>3]);
        Product::create(['id'=>10,'name'=>"Bruin Veterschoen",'description'=>"Model pizzabakker",'price'=>49.99,'subcategory_id'=>3]);
        Product::create(['id'=>11,'name'=>"Zwart Veterschoen",'description'=>"Model deurwaarder",'price'=>49.99,'subcategory_id'=>3]);
        Product::create(['id'=>12,'name'=>"Bloemen Veterschoen",'description'=>"Model portier",'price'=>49.99,'subcategory_id'=>3]);
        Product::create(['id'=>13,'name'=>"Spijkerbroek",'description'=>"Handwerk",'price'=>249.99,'subcategory_id'=>4]);
        Product::create(['id'=>14,'name'=>"Korte broek",'description'=>"Handwerk",'price'=>249.99,'subcategory_id'=>4]);
        Product::create(['id'=>15,'name'=>"T-Shirt wit",'description'=>"Katoen",'price'=>9.99,'subcategory_id'=>5]);
        Product::create(['id'=>16,'name'=>"T-Shirt rood",'description'=>"Katoen",'price'=>9.99,'subcategory_id'=>5]);
        Product::create(['id'=>17,'name'=>"T-Shirt zwart",'description'=>"Katoen",'price'=>9.59,'subcategory_id'=>5]);
        Product::create(['id'=>18,'name'=>"T-Shirt grijs",'description'=>"Katoen",'price'=>9.59,'subcategory_id'=>5]);
        Product::create(['id'=>19,'name'=>"T-Shirt bloem",'description'=>"Katoen",'price'=>9.99,'subcategory_id'=>5]);
        Product::create(['id'=>20,'name'=>"Hoody zwart",'description'=>"Katoen",'price'=>79.99,'subcategory_id'=>6]);
        Product::create(['id'=>21,'name'=>"Hoody grijs",'description'=>"Katoen",'price'=>79.99,'subcategory_id'=>6]);
        Product::create(['id'=>22,'name'=>"Hoody beige",'description'=>"Katoen",'price'=>79.99,'subcategory_id'=>6]);
        Product::create(['id'=>23,'name'=>"Hoody blauw",'description'=>"Katoen",'price'=>79.99,'subcategory_id'=>6]);
        Product::create(['id'=>24,'name'=>"Hoody zwart",'description'=>"Katoen",'price'=>79.99,'subcategory_id'=>6]);
        Product::create(['id'=>25,'name'=>"Stropdas Koe",'description'=>"Voor de afgeklede man",'price'=>29.99,'subcategory_id'=>7]);
        Product::create(['id'=>26,'name'=>"Stropdas Kalf",'description'=>"Voor de afgeklede man",'price'=>29.99,'subcategory_id'=>7]);
        Product::create(['id'=>27,'name'=>"Stropdas Zwart",'description'=>"Voor de afgeklede man",'price'=>29.99,'subcategory_id'=>7]);
        Product::create(['id'=>28,'name'=>"Stropdas Bloem",'description'=>"Voor de afgeklede man",'price'=>29.99,'subcategory_id'=>7]);
        Product::create(['id'=>29,'name'=>"Stropdas Bosgrond",'description'=>"Voor de afgeklede man",'price'=>29.99,'subcategory_id'=>7]);
      
    }
}

