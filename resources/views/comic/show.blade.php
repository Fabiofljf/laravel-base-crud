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
    <section id="single_comic">
        <div class="container">
            <div class="row flex-column">
                <div class="col">
                    <h2 class="p-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti dolores fugit ipsa temporibus quam, perspiciatis ea modi atque vero eveniet?</h2>
                </div>
                <!-- /.col -->
                <div class="col">
                    <div class="card text-start">
                      <img class="card-img-top" style="width:250px" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                      <div class="card-body">
                        <h4 class="card-title">{{$comic->title}}</h4>
                        <p class="card-text">{{$comic->description}}</p>
                        <p class="card-text">{{$comic->series}}</p>
                        <p class="card-text">{{$comic->price}}</p>
                      </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
        </div>
    </section>
    <!-- /#single_comic -->
    @endsection
</body>

</html>