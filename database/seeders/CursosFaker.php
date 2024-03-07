<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cursos_Rob;

class CursosFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Cursos_Rob::factory()->count(100)->create();
    }
}
