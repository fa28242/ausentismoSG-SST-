<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identif_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'clasification',
        'description',
        
        
    ];
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
