<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inability_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'inability_type_name',
        
        
        
    ];
    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}
