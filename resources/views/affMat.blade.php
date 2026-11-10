@extends('t1')

@section('titre')
    Les matières
@endsection

@section('contenu')
    <table>
        <thead>
            <tr>
                <th>Code</th>
                <th>Libelle</th>
                <th>Coefficient</th>
                <th>Épreuves</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matieres as $matiere)
                <tr>
                    <td>{{ $matiere ->codemat }}</td>
                    <td>{{ $matiere->libelle }}</td>
                    <td>{{ $matiere->coef }}</td>
                    <td><a href="{{ route('matiere.epreuves', $matiere->codemat) }}">Voir les épreuves ({{ $matiere->epreuves_count }})</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

   
@endsection
