@extends('t1')

@section('titre')
    Les épreuves
@endsection

@section('contenu')
    <table>
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Date</th>
                <th>Lieu</th>
                <th>Matière</th>
            </tr>
        </thead>
        <tbody>
           
    @foreach ($epreuves as $epreuve)
        <tr>
            <td>{{ $epreuve->numepreuve }}</td>
            <td>{{ $epreuve->datepreuve }}</td>
            <td>{{ $epreuve->lieu }}</td>
            <td>
                @if ($epreuve->matiere)
                    <a href="{{ route('epreuve.matiere', $epreuve->numepreuve) }}">{{ $epreuve->matiere->libelle }}</a>
                @else
                    Non affectée
                @endif
            </td>
        </tr>
    @endforeach
</tbody>
    </table>

    
@endsection
