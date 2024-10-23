<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $comics = config("db.comics");
    $cta = config("db.cta");
    return view('pages.home', compact("comics"), compact("cta"));
})->name("home");

Route::get('/comic/{id}', function (string $id) {
    dd($id);
    return view('pages.comic');
})->name("comic");
