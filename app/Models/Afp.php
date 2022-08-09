<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afp extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'afp_entity_name',
        
    ];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
