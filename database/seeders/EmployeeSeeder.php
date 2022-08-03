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
            'identif_type_id' => '1',
            'identif_number' => '1039011710',
            'salary' => '4500000',
            'salary_per_day' => '150000',
            'position' => 'Desarrollador Web',
            'work_area' => 'Desarrollo LARAVEL',
            'eps_id' => '1',
            'arl_id' => '1',
            'afp_id' => '1',
            'status' => '1',
        ]);

       

    }
}
