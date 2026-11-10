@extends('t1')

@section('titre')
    Ajouter matière
@endsection

@section('contenu')
    <form method="POST" action="{{ route('matiere.store') }}">
        @csrf
        <p>
            <label for="codemat">Code Matiere</label>
            <input type="number" name="codemat" id="codemat">
        </p>
         <p>
            <label for="libelle">Libelle Matiere</label>
            <input type="text" name="libelle" id="libelle">
        </p>
         <p>
            <label for="coef">Coef Matiere</label>
            <input type="number" name="coef" id="coef" step="any">
        </p>
        <p>
            <input type="submit" value="Envoyer">
        </p>
    </form>

@if ($errors->any())

    <div class="alert alert-danger">

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

    @isset($matiere)
        <div>
            <p>Code Matiere: {{ $matiere['codemat'] }}</p>
            <p>Libelle Matiere: {{ $matiere['libelle'] }}</p>
            <p>Coef Matiere: {{ $matiere['coef'] }}</p>
        </div>
    @endisset

@endsection
