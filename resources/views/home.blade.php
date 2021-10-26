<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Primi passi con Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            height: 80px;
            width: 100%;
            background-color: blue;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            transform: scale(1.4);
        }
    </style>


    <body>
        <header>
            <a href="{{  route('contatti') }}">Contact</a>
            <a href="{{  route('form') }}">Form</a>
            <a href="{{  route('termini') }}">Terms</a>
            <a href="{{  route('privacy') }}">Privacy</a>
        </header>
    </body>
</html>
