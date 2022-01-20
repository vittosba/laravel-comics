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

Route::get('/', function () {
    $comics = config('comics-data');

    return view('home', [
        'comics' => $comics,
    ]);
})->name('home');

Route::get('/comic/{id}', function($id) {
    //products (emula DB)
    $comics = config('comics-data');
    // dump($products, $id);

    // Check id
    if(is_numeric($id) && $id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
        // dump($product);
    }
    else {
        abort(404);
    }

    return view('comic', [
        'comic' => $comic,
    ]);
})->name('comic-detail');