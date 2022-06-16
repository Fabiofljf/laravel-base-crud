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
    <section id="intro">
        <div class="container">
            <div class="row flex-column">
                <div class="col d-flex justify-content-around m-5">
                    <h2>Esplora tutta la lista!</h2>
                    <button type="button" class="btn btn-primary" data-bs-toggle="button" aria-pressed="false" autocomplete="off">
                        <a class="text-light" href="{{route('comic.create')}}">Aggiungi</a>
                    </button>
                </div>
                <!-- /.col -->
                <div class="col">
                    <table style="width:100%">
                        <tr class="border">
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Thumb</th>
                            <th>Price</th>
                            <th>Series</th>
                            <th>Sale_date</th>
                            <th>Type</th>
                            <th>Controller</th>
                        </tr>
                        @foreach ($comics as $comic)

                        <tr>
                            <td class="border">{{$comic->id}}</td>
                            <td class="border">{{$comic->title}}</td>
                            <td class="border">{{$comic->description}}</td>
                            <td class="border"><img width=50 src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                            <td class="border">{{$comic->price}}</td>
                            <td class="border">{{$comic->series}}</td>
                            <td class="border">{{$comic->sale_date}}</td>
                            <td class="border">{{$comic->type}}</td>
                            <td class="border">
                                <a href="{{route('comic.show', $comic)}}">View</a>
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        @endforeach
                    </table>
                </div>
                <!-- /.col list-->
            </div>
        </div>
    </section>
    <!-- /#intro -->
    @endsection
</body>

</html>