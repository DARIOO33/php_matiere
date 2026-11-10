@extends('t1')

@section('titre')
Ajouter Epreuve
@endsection

@section('contenu')
<form method="POST" action="{{ route('epreuve.store') }}">
    @csrf
    <p>
        <label for="numepreuve">num Epreuve</label>
        <input type="number" name="numepreuve" id="numepreuve">
    </p>
    <p>
        <label for="datepreuve">Date Epreuve</label>
        <input type="date" name="datepreuve" id="datepreuve">
    </p>
    <p>
        <label for="lieu">Lieu Epreuve</label>
        <input type="text" name="lieu" id="lieu">
    </p>

    <p>
        <label for="matiere_id">Matière</label>
        <input type="number" name="matiere_id" id="matiere_id">
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
@isset($epreuve)
<div>
<p>Numero Epreuve : {{ $epreuve['numepreuve'] }}</p>
<p>Date Epreuve : {{ $epreuve['datepreuve']}}</p>
<p>Lieu Epreuve : {{ $epreuve['lieu'] }}</p>
<p>Id Matiere : {{ $epreuve['matiere_id'] }}</p>

</div>
@endisset
@endsection
