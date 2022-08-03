<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inability extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'inability_type_id',
        'date_start',
        'date_finish',
        'total_inability_days',
        'clasification',
        'inability_amount',
        'inability_company_amount',
        'inability_entity_amount',
        
    ];
}
