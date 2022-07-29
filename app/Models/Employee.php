<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'identif_type',
        'identif_number',
        'salary',
        'position',
        'work_area',
        'eps',
        'arl',
        'afp',
        'status',
    ];
}
