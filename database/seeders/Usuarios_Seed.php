<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Usuarios_Seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios_robs')->insert(
            ['Username'=> 'Admon','Email'=> 'admon@robotics.com','Password'=> 'Adm@2022','Rol'=> 'Administrative']);
        DB::table('usuarios_robs')->insert(
            ['Username'=> 'Tecmilenio','Email'=> 'tecmilenio@robotics.com','Password'=> 'Adm@2022','Rol'=> 'Teacher']);
        DB::table('usuarios_robs')->insert( 
                ['Username'=> 'Student','Email'=> 'student@robotics.com','Password'=> 'Adm@2022','Rol'=> 'Student']);
    }
}
