<?php

namespace App\Http\Controllers;

use App\Models\Epreuve;
use App\Models\Matiere;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EpreuveController extends Controller
{
    public function create(): View
    {
        return view('ajoutEpreuve');
    }

    public function index(): View
    {
        $epreuves = Epreuve::with('matiere')->get();

        return view('affEpreuve')->with('epreuves', $epreuves);
    }

    public function matiere(int $numepreuve): View
    {
        $epreuve = Epreuve::with('matiere')->where('numepreuve', $numepreuve)->first();

        return view('epreuveMatiere', compact('epreuve'));
    }

    public function store(Request $request) 
    {
        $epreuve = $request->validate(['numepreuve' => 'required',
            'datepreuve' => 'required|date',
            'lieu' => 'required',
            'matiere_id' => 'required',
        ]);
        return view('ajoutEpreuve', ['epreuve' => $epreuve]);

    }
}
