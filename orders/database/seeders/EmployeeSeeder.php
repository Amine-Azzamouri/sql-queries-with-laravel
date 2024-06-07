<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        Employee::create(['id'=>1,'firstname'=>"Kees",'lastname'=>"Roos"]);
        Employee::create(['id'=>2,'firstname'=>"Karel",'lastname'=>"Tulp"]);
        Employee::create(['id'=>3,'firstname'=>"Kees",'lastname'=>"Pudding"]);
        Employee::create(['id'=>4,'firstname'=>"Joris",'lastname'=>"Pot"]);
      
    }
}


