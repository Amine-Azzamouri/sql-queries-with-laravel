<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        Customer::create(['id'=>1,'firstname'=>"Berend",'lastname'=>"Broodspot"]);
        Customer::create(['id'=>2,'firstname'=>"Willem",'lastname'=>"Pudding"]);
        Customer::create(['id'=>3,'firstname'=>"Niko",'lastname'=>"Jansen"]);
        Customer::create(['id'=>4,'firstname'=>"Nicolet",'lastname'=>"Langedonk"]);
        Customer::create(['id'=>5,'firstname'=>"Nico",'lastname'=>"Braadpan"]);
        Customer::create(['id'=>6,'firstname'=>"Wimme",'lastname'=>"Winter"]);
        Customer::create(['id'=>7,'firstname'=>"Wim",'lastname'=>"Jansen"]);
        Customer::create(['id'=>8,'firstname'=>"Bas",'lastname'=>"Broodspot"]);
        Customer::create(['id'=>9,'firstname'=>"Boris",'lastname'=>"Lange"]);
        Customer::create(['id'=>10,'firstname'=>"Joris",'lastname'=>"Pot"]);

    }
}

