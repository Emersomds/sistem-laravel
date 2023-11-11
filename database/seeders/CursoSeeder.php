<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        if (!Curso::where('name', 'Curso de PHP basico')->first()) {
            Curso::create([
                'name' => 'Curso de PHP basico',

            ]);
        }

        if (!Curso::where('name', 'Curso de Laravel iniciante')->first()) {
            Curso::create([
                'name' => 'Curso de Laravel iniciante',

            ]);
        }
    }
}
