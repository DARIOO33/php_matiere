<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StoreTest extends TestCase
{
    use RefreshDatabase;

    public function test_posting_a_matiere_does_not_insert_it(): void
    {
        $response = $this->post(route('matiere.store'), [
            'codemat' => 'MAT001',
            'libelle' => 'Laravel',
            'coef' => 2.5,
        ]);

        $response->assertRedirect(route('matiere.create'));
        $this->assertDatabaseMissing('matieres', ['codemat' => 'MAT001']);
    }

    public function test_posting_an_epreuve_does_not_insert_it(): void
    {
        $response = $this->post(route('epreuve.store'), [
            'numepreuve' => 1,
            'datepreuve' => '2026-11-05',
            'lieu' => 'Salle B12',
            'matiere_id' => null,
        ]);

        $response->assertRedirect(route('epreuve.create'));
        $this->assertDatabaseMissing('epreuves', ['numepreuve' => 1]);
    }
}
