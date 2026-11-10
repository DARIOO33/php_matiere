<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Epreuve extends Model
{
    protected $fillable = [
        'numepreuve',
        'datepreuve',
        'lieu',
        'matiere_id',
    ];

    protected function casts(): array
    {
        return [
            'datepreuve' => 'date',
        ];
    }

    public function matiere(): BelongsTo
    {
        return $this->belongsTo(Matiere::class);
    }
}
