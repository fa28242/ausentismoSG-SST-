<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create
        ([
            'name' => 'Francisco J.',
            'lastname' => 'Alvarez',
            'identif_type' => 'Cédula',
            'identif_number' => '1039011710',
            'salary' => '4500000',
            'position' => 'Desarrollador Web',
            'work_area' => 'Desarrollo LARAVEL',
            'eps' => 'Sura',
            'arl' => 'Sura',
            'afp' => 'Protección',
            'status' => '1',
        ]);

       

    }
}
