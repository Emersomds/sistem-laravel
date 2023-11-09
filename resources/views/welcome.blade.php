<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistem-Laravel</title>

       
        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <h1>Projeto sistema com laravel</h1>

        <a href="{{route('curso.index')}}">Listar os cursos</a>
    </body>
</html>
