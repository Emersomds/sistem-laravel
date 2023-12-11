<?php

namespace Database\Seeders;

use App\Models\Aula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!Aula::where('name', 'Aula 1')->first()){
            Aula::create([
                'name' => 'Aula 1',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Nunc faucibus quam justo, at iaculis lectus consequat ut. Donec eu nisi eget ante dictum pulvinar. 
                Mauris pellentesque elit vitae sapien vulputate dapibus.',
                'curso_id'=>1
            ]);

        }
        if(!Aula::where('name', 'Aula 2')->first()){
            Aula::create([
                'name' => 'Aula 2',
                'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Nunc faucibus quam justo, at iaculis lectus consequat ut. Donec eu nisi eget ante dictum pulvinar. 
                Mauris pellentesque elit vitae sapien vulputate dapibus.',
                'curso_id'=>1
            ]);

        }
    }
}
