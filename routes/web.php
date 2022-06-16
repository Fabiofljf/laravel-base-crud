<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@home')->name('index'); // - Percorso della home

Route::get('/comic', 'ComicController@index')->name('comic.index'); // - Percorso lista comics

Route::get('/comic/{comic}', 'ComicController@show')->name('comic.show'); // - Percorso singolo comics
