<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cursos_Rob;
use Faker\Generator as Faker;

class CursosFacFactory extends Factory

{
    protected static function newFactory()
{
    return \Modules\Module\Database\Factories\CursosFacFactory::new();
}

    protected $model = Cursos_Rob::class;

    public function definition() 
    {
            
                return [
                    'Nombre' => $this->faker->name,
                    'Descripcion' => $this->faker->sentence,
                ];
    }
}