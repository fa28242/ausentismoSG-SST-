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
        'identif_type_id',
        'identif_number',
        'salary',
        'salary_per_day',
        'position',
        'work_area',
        'eps_id',
        'arl_id',
        'afp_id',
        'status',
    ];

    //Funcion util que retorna el nobre entero cuando en DB esta dividido en os columnas name +lastname
    public function getFullNameAttribute()
    {
        return "{$this->name} {$this->lastname}";
    }

   /*  //RELACION DE UNO A UNO CON USUARIO
    public function user()
    {
        return $this->hasOne(User::class);
    } */


    //RELACION DE UN0 A MUCHOS

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function eps()
    {
        return $this->belongsTo(Eps::class);
    }

    public function arl()
    {
        return $this->belongsTo(Arl::class);
    }
    public function afp()
    {
        return $this->belongsTo(Afp::class);
    }
    public function identif_type()
    {
        return $this->belongsTo(Identif_type::class);
    }

}
