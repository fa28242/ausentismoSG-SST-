<?php

namespace Database\Seeders;

use App\Models\Afp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AfpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Afp::create
        ([
            'code' => '230201',
            'afp_entity_name' => 'ADMINISTRADORA DE FONDOS DE PENSIONES Y CESANTÍAS PROTECCIÓN S.A',
        ]);
        Afp::create
        ([
            'code' => '230301',
            'afp_entity_name' => 'SOCIEDAD ADMINISTRADORA DE FONDOS DE PENSIONES Y CESANTÍAS PORVENIR S.A',
        ]);
        Afp::create
        ([
            'code' => '230901',
            'afp_entity_name' => 'OLD MUTUAL ADMINISTRADORA DE FONDOS DE PENSIONES Y CESANTÍAS S.A',
        ]);
        Afp::create
        ([
            'code' => '230904',
            'afp_entity_name' => 'OLD MUTUAL ALTERNATIVO',
        ]);
        Afp::create
        ([
            'code' => '231001',
            'afp_entity_name' => 'COMPAÑIA  COLOMBIANA ADMINISTRADORA DE FONDOS DE PENSIONES Y CESANTÍAS S.A COLFONDOS',
        ]);
        Afp::create
        ([
            'code' => '25-14',
            'afp_entity_name' => 'Administradora Colombiana de Pensiones COLPENSIONES',
        ]);
        Afp::create
        ([
            'code' => '25-2',
            'afp_entity_name' => 'CAJA DE AUXILIOS Y PRESTACIONES DE LA ASOCIACIÓN  COLOMBIANA DE AVIADORES CIVILES ACDAC CAXDAC',
        ]);
        Afp::create
        ([
            'code' => '25-3',
            'afp_entity_name' => 'FONDO DE PREVISION  SOCIAL DEL CONGRESO DE LA REPUBLICA FONPRECON',
        ]);
        Afp::create
        ([
            'code' => '25-7',
            'afp_entity_name' => 'PENSIONES DE ANTIOQUIA',
        ]);
        Afp::create
        ([
            'code' => 'RES002',
            'afp_entity_name' => 'ECOPETROL',
        ]);
        Afp::create
        ([
            'code' => 'RES004',
            'afp_entity_name' => 'FONDO DE PRESTACIONES SOCIALES DEL MAGISTERIO',
        ]);
    }
}
