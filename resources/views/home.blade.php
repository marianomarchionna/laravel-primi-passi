<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Primi passi con Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>IO</h1>
        <h2>{{ $nome }} {{ $cognome }}, {{ $eta }} anni</h2>
        <h2>Passioni: </h2>
        <ul>
            @foreach ($hobbies as $hobby)
            <li>{{ $hobby }}</li>
            @endforeach
        </ul>
    </body>
</html>
