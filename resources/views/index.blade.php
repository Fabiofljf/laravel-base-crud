@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

</head>

<body>
    @section ('content')
    <section id="intro_home">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Benvenuto della pagina Comics</h1>
                    <p>Guarda tutte le nuove uscite</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aliquid quisquam qui cum natus, quod autem asperiores omnis fugit ipsum aliquam inventore sit maxime, optio nobis. Eveniet dolores sapiente iusto non nam, rerum veritatis voluptatum placeat exercitationem, quisquam soluta, minus dolorum voluptate ullam ab? Iure, doloribus. Libero sunt nulla tempora rerum facere voluptatem quasi deserunt pariatur similique est et cum deleniti facilis odio impedit eligendi ipsum, reiciendis eius eum nostrum blanditiis, illum minus. Veritatis at iure possimus perspiciatis esse nostrum omnis adipisci repellat, voluptate minus doloribus eaque culpa illum velit ipsa quod quibusdam autem ullam voluptatibus pariatur libero incidunt quos?</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /#intro_home -->
    @endsection
</body>

</html>