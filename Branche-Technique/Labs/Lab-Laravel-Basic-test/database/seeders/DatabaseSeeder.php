<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table("projects")->insert([
            [
                'projectName' => 'Portfolio',
                'description' => 'Développement d\'un site web mettant en valeur nos compétences.',
            ],
            [
                'projectName' => 'Arbre des compétences',
                'description' => 'Création d\'une application web pour l\'évaluation des compétences.',
            ],
            [
                'projectName' => 'CNMH',
                'description' => 'Création d\'une application web pour laa gestion des patients de centre cnmh.',
            ]
        ]);
    }
}
