<?php

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

// Home route
Route::get('/', function () {

    $comics = config("comics");

    // dd($comics);

    return view('partials/pages/comic-book/index', compact('comics') );
})->name('index');

Route::get('/index/{id}', function ($id) {

    $comics = config("comics");

    // dd($comics);
    if( is_numeric( $id ) && $id < count( $comics ) && $id > -1) {
        // dump($id)
        $com = $comics[$id];
    } else {
        abort(404);
    }


    return view('partials/pages/comic-book/show', compact('com'));
})->name('show');

// Route::get('/comic-books', function () {

//     $comics = config("comics");

//     return view('home', ["comicsArr" => $comics]
//     );
// })->name('home');

// // // Home route
// Route::get('/', function () {
//     return view('/home');
// })->name('home');

// Header routes
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/comics', function () {
    return view('comics');
})->name('comics');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/video', function () {
    return view('video');
})->name('video');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/search', function () {
    return view('search');
})->name('search');
