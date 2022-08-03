<?php

namespace Database\Seeders;

use App\Models\Inability_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Inability_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inability_type::create
        ([
            'inability_type_name' => '	Enfermedad común',
        ]);
        Inability_type::create
        ([
            'inability_type_name' => 'Licencia de maternidad / paternidad',
        ]);
        Inability_type::create
        ([
            'inability_type_name' => 'Accidente de trabajo',
        ]);
        Inability_type::create
        ([
            'inability_type_name' => 'Enfermedad laboral',
        ]);
        Inability_type::create
        ([
            'inability_type_name' => 'Fondo de Pensiones',
        ]);
        Inability_type::create
        ([
            'inability_type_name' => 'Accidente de tránsito',
        ]);
    }
}
