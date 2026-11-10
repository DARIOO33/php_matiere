@extends('t1')

@section('titre')
    Épreuves de {{ $matiere->libelle }}
@endsection

@section('contenu')
    <h2>Épreuves de la matière {{ $matiere->codemat }} — {{ $matiere->libelle }}</h2>

    <table>
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Date</th>
                <th>Lieu</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($epreuves as $epreuve)
                <tr>
                    <td>{{ $epreuve->numepreuve }}</td>
                    <td>{{ $epreuve->datepreuve->format('d/m/Y') }}</td>
                    <td>{{ $epreuve->lieu }}</td>
                </tr>
            @empty
                <tr><td colspan="3">Aucune épreuve pour cette matière.</td></tr>
            @endforelse
        </tbody>
    </table>

    <p><a href="{{ route('matiere') }}">Retour aux matières</a></p>
@endsection
