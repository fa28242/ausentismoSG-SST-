<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Identif_type; 

class Identif_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Identif_type::create
        ([
            'clasification' => 'CC',
            'description' => 'CÉDULA DE CIUDADANIA',
        ]);
        Identif_type::create
        ([
            'clasification' => 'CE',
            'description' => 'CÉDULA DE EXTRANJERÍA',
        ]);
        Identif_type::create
        ([
            'clasification' => 'NIP',
            'description' => 'NÚMERO DE IDENTIFICACIÓN PERSONAL',
        ]);
        Identif_type::create
        ([
            'clasification' => 'NIT',
            'description' => 'NÚMERO DE IDENTIFICACIÓN TRIBUTARIA',
        ]);
        Identif_type::create
        ([
            'clasification' => 'TI',
            'description' => 'TARJETA DE IDENTIDAD',
        ]);
        Identif_type::create
        ([
            'clasification' => 'PAP',
            'description' => 'PASAPORTE',
        ]);
    }
}
