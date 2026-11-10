@extends('t1')

@section('titre')
    Matière de l'épreuve {{ $epreuve->numepreuve }}
@endsection

@section('contenu')
    <h2>Épreuve numéro {{ $epreuve->numepreuve }}</h2>
    <p>Libellé de la matière : {{ $epreuve->matiere->libelle }}</p>
    <p><a href="{{ route('epreuve') }}">Retour aux épreuves</a></p>
@endsection
