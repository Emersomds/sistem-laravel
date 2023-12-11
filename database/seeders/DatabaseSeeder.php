<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // Executa o cadastro automatico de dadosd no banco de dados
    public function run(): void
    {
        $this->call([
            CursoSeeder::class,
            AulaSeeder::class,
        ]);
    }
}
