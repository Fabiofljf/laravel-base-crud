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
                                <input type="text" class="form-control @error('title') is_invalid @enderror" name="title" id="inputName" placeholder="Title">
                            </div>
                            <small id="helpId" class="text-muted">type title here</small>
                            @error('title')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3 row">
                            <label for="description" class="col-xs-4 col-form-label">Description</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control @error('description') is_invalid @enderror" name="description" id="inputName" placeholder="Description">
                            </div>
                            <small id="helpId" class="text-muted">type description here</small>
                            @error('description')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3 row">
                            <label for="thumb" class="col-xs-4 col-form-label">Thumb</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control @error('thumb') is_invalid @enderror" name="thumb" id="inputName" placeholder="Immagine">
                            </div>
                            <small id="helpId" class="text-muted">type thumb here</small>
                            @error('thumb')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3 row">
                            <label for="price" class="col-xs-4 col-form-label">Price</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control @error('price') is_invalid @enderror" name="price" id="inputName" placeholder="Price">
                            </div>
                            <small id="helpId" class="text-muted">type price here</small>
                            @error('price')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3 row">
                            <label for="series" class="col-xs-4 col-form-label">Series</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control @error('series') is_invalid @enderror" name="series" id="inputName" placeholder="Series">
                            </div>
                            <small id="helpId" class="text-muted">type series here</small>
                            @error('series')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3 row">
                            <label for="sale_date" class="col-xs-4 col-form-label">Sale_date</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control @error('sale_date') is_invalid @enderror" name="sale_date" id="inputName" placeholder="Sale_date">
                            </div>
                            <small id="helpId" class="text-muted">type sale_date here</small>
                            @error('sale_date')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3 row">
                            <label for="type" class="col-xs-4 col-form-label">Type</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control @error('type') is_invalid @enderror" name="type" id="inputName" placeholder="Type">
                            </div>
                            <small id="helpId" class="text-muted">type type here</small>
                            @error('type')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
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