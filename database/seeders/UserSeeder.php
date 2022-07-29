<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Francisco Alvarez',
            'email' => 'fa@fa.com',
            'status' => '1',
            'password' => bcrypt('123'),
            'employee_id' => '1',
        ])->assignRole('ADMINISTRADOR');
    }
}
