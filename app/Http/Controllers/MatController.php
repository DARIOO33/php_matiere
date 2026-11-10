<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MatController extends Controller
{
    public function create(): View
    {
        return view('ajoutMatiere');
    }

    public function index(): View
    {
        $matieres = Matiere::withCount('epreuves')->get();

        return view('affMat')->with('matieres', $matieres);
    }

    public function epreuves(string $codemat): View
    {
        $matiere = Matiere::where('codemat', $codemat)->firstOrFail();

        return view('matiereEpreuves', ['matiere' => $matiere, 'epreuves' => $matiere->epreuves]);
    }

    public function store(Request $request)
    {
        $matiere = $request->validate(['codemat' => 'required|numeric|max:10000',
            'libelle' => 'required',
            'coef' => 'required|numeric|min:1|max:5',
        ]);

        return view('ajoutMatiere', ['matiere' => $matiere]);
    }
}
