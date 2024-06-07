<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    public function run(): void
    {
        Subcategory::create(['id'=>1,'name'=>"Sportschoen",'category_id'=>1]);
        Subcategory::create(['id'=>2,'name'=>"Laarsen",'category_id'=>1]);
        Subcategory::create(['id'=>3,'name'=>"Nette schoenen",'category_id'=>1]);
        Subcategory::create(['id'=>4,'name'=>"Broek",'category_id'=>2]);
        Subcategory::create(['id'=>5,'name'=>"Shirt",'category_id'=>2]);
        Subcategory::create(['id'=>6,'name'=>"Trui",'category_id'=>2]);
        Subcategory::create(['id'=>7,'name'=>"Stropdas",'category_id'=>3]);
      
    }
}

