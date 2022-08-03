<?php

namespace Database\Seeders;

use App\Models\Arl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Arl::create ([
            'code' => '14-17',
            'arl_entity_name' => 'SEGUROS DE VIDA ALFA S.A',
        ]);
        Arl::create ([
            'code' => '14-23',
            'arl_entity_name' => 'POSITIVA COMPAÑIA DE SEGUROS',
        ]);
        Arl::create ([
            'code' => '14-25',
            'arl_entity_name' => 'RIESGOS PROFESIONALES COLMENA SA COMPAÑIA DE SEGUROS DE VIDA',
        ]);
        Arl::create ([
            'code' => '14-28',
            'arl_entity_name' => 'ARP SURA',
        ]);
        Arl::create ([
            'code' => '14-29',
            'arl_entity_name' => 'LA EQUIDAD SEGUROS DE VIDA ORGANISMO COOPERATIVO  LA EQUIDAD VIDA',
        ]);
        Arl::create ([
            'code' => '14-30',
            'arl_entity_name' => 'MAPFRE COLOMBIA VIDA SEGUROS S.A',
        ]);
        Arl::create ([
            'code' => '14-4',
            'arl_entity_name' => 'SEGUROS DE VIDA COLPATRIA S.A',
        ]);
        Arl::create ([
            'code' => '14-7',
            'arl_entity_name' => 'COMPAÑÍA DE SEGUROS BOLIVAR S.A',
        ]);
        Arl::create ([
            'code' => '14-8',
            'arl_entity_name' => 'COMPAÑÍA DE SEGUROS DE VIDA AURORA',
        ]);
        
    }
}
