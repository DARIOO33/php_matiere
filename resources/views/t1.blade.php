<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titre')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Gestion des matières et des épreuves</h1>
        <nav>
            <button type="button" data-url="{{ route('matiere') }}">Matières</button>
            <button type="button" data-url="{{ route('epreuve') }}">Épreuves</button>
            <button type="button" data-url="{{ route('matiere.create') }}">Ajouter Matieres</button>
            <button type="button" data-url="{{ route('epreuve.create') }}">Ajouter Épreuves</button>
        </nav>
    </header>
    <main>
        @yield('contenu')
    </main>


    <footer>TP N03</footer>

    <script src="{{ asset('js/navigation.js') }}"></script>
</body>
</html>
