<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Realisation;

class RealisationsSeeder extends Seeder
{
    public function run(): void
    {
        Realisation::insert([
            [
                'titre' => 'Maison contemporaine',
                'description' => 'Architecture moderne et lignes épurées, grand espace de vie ouvert.',
                'image' => 'maison-contemporaine.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Extension bois et verre',
                'description' => 'Ajout d’une véranda lumineuse sur structure bois et aluminium.',
                'image' => 'extension-bois-verre.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // etc.
        ]);
    }
}
