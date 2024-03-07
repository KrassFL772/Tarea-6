<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Cursos_Seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kit_robos')->insert(
            ['Nombre'=> 'Starter kit']);
        DB::table('kit_robos')->insert(
            ['Nombre'=> 'Educational Robotics Kits']);
        DB::table('kit_robos')->insert(
                ['Nombre'=> 'Kit5']);
    }
}
