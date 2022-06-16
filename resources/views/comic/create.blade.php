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
    <section id="create">
        <h4 class="p-5">Crea il tuo comics</h4>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="{{route('comic.store')}}" method="post">
                        @csrf
                        <div class="mb-3 row">
                            <label for="title" class="col-xs-4 col-form-label">Title</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="title" id="inputName" placeholder="Title">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="description" class="col-xs-4 col-form-label">Description</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="description" id="inputName" placeholder="Description">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="thumb" class="col-xs-4 col-form-label">Thumb</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="thumb" id="inputName" placeholder="Immagine">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="offset-sm-4 col-sm-8">
                                <button type="submit" class="btn btn-primary">Invia!</button>
                            </div>
                        </div>
                        <!-- btn -->
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /#create -->
    @endsection
</body>

</html>