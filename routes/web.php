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

//Route::resource('comics', ComicController::class);

Route::get('/comic', 'ComicController@index')->name('comic.index'); // - Percorso lista comics

Route::get('/comic/create', 'ComicController@create')->name('comic.create'); // - Percorso create

Route::post('/comic/store', 'ComicController@store')->name('comic.store'); // - Percorso store

Route::get('/comic/{comic}', 'ComicController@show')->name('comic.show'); // - Percorso show

Route::get('/comic/edit/{comic}', 'ComicController@edit')->name('comic.edit'); // - Percorso edit

Route::put('/comic/update/{comic}', 'ComicController@update')->name('comic.update'); // - Percorso update

Route::delete('/comic/destroy/{comic}', 'ComicController@destroy')->name('comic.destroy'); // - Percorso destroy
