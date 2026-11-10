<?php

namespace Database\Seeders;

use App\Models\Epreuve;
use App\Models\Matiere;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $algorithmique = Matiere::create([
            'codemat' => 'alg',
            'libelle' => 'Algorithmique',
            'coef' => 3,
        ]);

        $developpementWeb = Matiere::create([
            'codemat' => 'web',
            'libelle' => 'Développement Web',
            'coef' => 2,
        ]);

        Epreuve::create([
            'numepreuve' => 5,
            'datepreuve' => '2026-11-15',
            'lieu' => 'Salle B12',
            'matiere_id' => $algorithmique->id,
        ]);

        Epreuve::create([
            'numepreuve' => 6,
            'datepreuve' => '2026-11-16',
            'lieu' => 'Salle A03',
            'matiere_id' => $algorithmique->id,
        ]);

        Epreuve::create([
            'numepreuve' => 7,
            'datepreuve' => '2026-11-17',
            'lieu' => 'Salle C02',
            'matiere_id' => $developpementWeb->id,
        ]);
    }
}
