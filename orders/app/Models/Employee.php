<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;


class Employee extends Model
{

    protected $table = 'employees';

    protected $fillable = [
        'id',
        'firstname',
        'lastname',
    ];
}

