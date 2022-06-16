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
                <div class="col">
                    <h2>Esplora tutta la lista!</h2>
                </div>
                <!-- /.col -->
                <div class="col">
                    <table style="width:100%">
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Thumb</th>
                            <th>Price</th>
                            <th>Series</th>
                            <th>Sale_date</th>
                            <th>Type</th>
                        </tr>
                        @foreach ($comics as $comic)
                        <tr>
                            <td>{{$comic->id}}</td>
                            <td>{{$comic->title}}</td>
                            <td>{{$comic->description}}</td>
                            <td><img width=50 src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                            <td>{{$comic->price}}</td>
                            <td>{{$comic->series}}</td>
                            <td>{{$comic->sale_date}}</td>
                            <td>{{$comic->type}}</td>
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