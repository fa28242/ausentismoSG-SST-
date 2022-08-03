<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eps extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'eps_entity_name',
        'NIT',
        'regimen',
        
    ];
    public function employee()
    {
        return $this->hasOne(Employee::class);
    }
}
