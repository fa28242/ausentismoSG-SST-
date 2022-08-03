<?php

namespace Database\Seeders;

use App\Models\Eps;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eps::create
        ([
            'code' => 'ESS024 - EPS042',
            'eps_entity_name' => 'COOSALUD EPS-S',
            'NIT' => '900226715',
            'regimen' => 'AMBOS REGÍMENES',
        ]);
        Eps::create
        ([
            'code' => 'EPS037 - EPSS41',
            'eps_entity_name' => 'NUEVA EPS',
            'NIT' => '900156264',
            'regimen' => 'AMBOS REGÍMENES',
        ]);
        Eps::create
        ([
            'code' => 'ESS207 - EPS048',
            'eps_entity_name' => 'MUTUAL SER',
            'NIT' => '806008394',
            'regimen' => 'AMBOS REGÍMENES',
        ]);
        Eps::create
        ([
            'code' => 'EPS001',
            'eps_entity_name' => 'ALIANSALUD EPS',
            'NIT' => '830113831',
            'regimen' => 'CONTRIBUTIVO',
        ]);
        Eps::create
        ([
            'code' => 'EPS002',
            'eps_entity_name' => 'SALUD TOTAL EPS S.A.',
            'NIT' => '800130907',
            'regimen' => 'CONTRIBUTIVO',
        ]);
       
        Eps::create
        ([
            'code' => 'EPS005',
            'eps_entity_name' => 'EPS SANITAS',
            'NIT' => '800251440',
            'regimen' => 'CONTRIBUTIVO',
        ]);
        Eps::create
        ([
            'code' => 'EPS010',
            'eps_entity_name' => 'EPS SURA',
            'NIT' => '800088702',
            'regimen' => 'CONTRIBUTIVO',
        ]);
        Eps::create
        ([
            'code' => 'EPS017',
            'eps_entity_name' => 'FAMISANAR',
            'NIT' => '830003564',
            'regimen' => 'CONTRIBUTIVO',
        ]);
        Eps::create
        ([
            'code' => 'EPS018',
            'eps_entity_name' => 'SERVICIO OCCIDENTAL DE SALUD EPS SOS',
            'NIT' => '805001157',
            'regimen' => 'CONTRIBUTIVO',
        ]);
        Eps::create
        ([
            'code' => 'EPS046',
            'eps_entity_name' => 'SALUD MIA',
            'NIT' => '900914254',
            'regimen' => 'CONTRIBUTIVO',
        ]);
        Eps::create
        ([
            'code' => 'EPS012',
            'eps_entity_name' => 'COMFENALCO VALLE',
            'NIT' => '890303093',
            'regimen' => 'CONTRIBUTIVO',
        ]);
        Eps::create
        ([
            'code' => 'EPS008',
            'eps_entity_name' => 'COMPENSAR EPS',
            'NIT' => '860066942',
            'regimen' => 'CONTRIBUTIVO',
        ]);
        Eps::create
        ([
            'code' => 'EAS016',
            'eps_entity_name' => 'EPM - EMPRESAS PUBLICAS DE MEDELLIN',
            'NIT' => '890904996',
            'regimen' => 'CONTRIBUTIVO',
        ]);
        Eps::create
        ([
            'code' => 'EAS027',
            'eps_entity_name' => 'FONDO DE PASIVO SOCIAL DE FERROCARRILES NACIONALES DE COLOMBIA',
            'NIT' => '800112806',
            'regimen' => 'CONTRIBUTIVO',
        ]);
        Eps::create
        ([
            'code' => 'CCF055',
            'eps_entity_name' => 'CAJACOPI ATLANTICO',
            'NIT' => '890102044',
            'regimen' => 'SUBSIDIADO',
        ]);
        Eps::create
        ([
            'code' => 'EPS025',
            'eps_entity_name' => 'CAPRESOCA',
            'NIT' => '891856000',
            'regimen' => 'SUBSIDIADO',
        ]);
        Eps::create
        ([
            'code' => 'CCF102',
            'eps_entity_name' => 'COMFACHOCO',
            'NIT' => '891600091',
            'regimen' => 'SUBSIDIADO',
        ]);
        Eps::create
        ([
            'code' => 'CCF023',
            'eps_entity_name' => 'COMFAMILIAR DE LA  GUAJIRA',
            'NIT' => '892115006',
            'regimen' => 'SUBSIDIADO',
        ]);
        Eps::create
        ([
            'code' => 'CCF024',
            'eps_entity_name' => 'COMFAMILIAR HUILA',
            'NIT' => '891180008',
            'regimen' => 'SUBSIDIADO',
        ]);
        Eps::create
        ([
            'code' => 'CCF050',
            'eps_entity_name' => 'COMFAORIENTE',
            'NIT' => '890500675',
            'regimen' => 'SUBSIDIADO',
        ]);
        Eps::create
        ([
            'code' => 'CCF033',
            'eps_entity_name' => 'EPS FAMILIAR DE COLOMBIA',
            'NIT' => '901543761',
            'regimen' => 'SUBSIDIADO',
        ]);
        Eps::create
        ([
            'code' => 'ESS062',
            'eps_entity_name' => 'ASMET  SALUD',
            'NIT' => '900935126',
            'regimen' => 'SUBSIDIADO',
        ]);
        Eps::create
        ([
            'code' => 'ESS091',
            'eps_entity_name' => 'ECOOPSOS ESS EPS-S',
            'NIT' => '901093846',
            'regimen' => 'SUBSIDIADO',
        ]);
        Eps::create
        ([
            'code' => 'ESS118',
            'eps_entity_name' => 'EMSSANAR E.S.S.',
            'NIT' => '901021565',
            'regimen' => 'SUBSIDIADO',
        ]);
        Eps::create
        ([
            'code' => 'EPSS34',
            'eps_entity_name' => 'CAPITAL SALUD EPS-S',
            'NIT' => '900298372',
            'regimen' => 'SUBSIDIADO',
        ]);
        Eps::create
        ([
            'code' => 'EPS022',
            'eps_entity_name' => 'CONVIDA',
            'NIT' => '899999107',
            'regimen' => 'SUBSIDIADO',
        ]);
        Eps::create
        ([
            'code' => 'EPSS40',
            'eps_entity_name' => 'SAVIA SALUD EPS',
            'NIT' => '900604350',
            'regimen' => 'SUBSIDIADO',
        ]);
        Eps::create
        ([
            'code' => 'EPSI01',
            'eps_entity_name' => 'DUSAKAWI EPSI',
            'NIT' => '824001398',
            'regimen' => 'SUBSIDIADO',
        ]);
        Eps::create
        ([
            'code' => 'EPSI03',
            'eps_entity_name' => 'ASOCIACION INDIGENA DEL CAUCA EPSI',
            'NIT' => '817001773',
            'regimen' => 'SUBSIDIADO',
        ]);
        Eps::create
        ([
            'code' => 'EPSI04',
            'eps_entity_name' => 'ANAS WAYUU EPSI',
            'NIT' => '839000495',
            'regimen' => 'SUBSIDIADO',
        ]);
        Eps::create
        ([
            'code' => 'EPSI05',
            'eps_entity_name' => 'MALLAMAS EPSI',
            'NIT' => '837000084',
            'regimen' => 'SUBSIDIADO',
        ]);
        Eps::create
        ([
            'code' => 'EPSI06',
            'eps_entity_name' => 'PIJAOS SALUD EPSI',
            'NIT' => '809008362',
            'regimen' => 'SUBSIDIADO',
        ]);
    }
}
