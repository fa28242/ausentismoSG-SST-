<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(AfpSeeder::class);
        $this->call(ArlSeeder::class);
        $this->call(EpsSeeder::class);
        $this->call(Identif_typeSeeder::class);
        $this->call(Inability_typeSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(Userseeder::class);
    }
}
