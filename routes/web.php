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
    return view('home.index');
})->name('home.index');


Route::get('/comics', function () {
    $comics_list = config('comics');

    return view('comics.index', ['comics_list' => $comics_list]);
})->name('comics.index');


Route::get('/comics/{id?}', function ($id) {
    $comics_list = config('comics');

    if (is_numeric($id) && $id >= 0 && $id < count($comics_list)) {
        $cartoon = $comics_list[$id];
    
        return view("comics.details", [
          "cartoon" => $cartoon
        ]);
      } else {
        abort('404');
    }
})->name('comics.details');