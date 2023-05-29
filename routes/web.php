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
    $data = config("db_partials");
    return view('home', compact("data"));
})->name("home");

Route::get('/comic/{id}', function ($id) {
    $database = config("db_partials");
    if ($id >= 0 && $id < count($database["comics_list"])) {
        $comic = $database["comics_list"][$id];
        return view('comics.comic', compact('database', 'comic'));
    } else {
        abort(404, "Error Page Not Found");
    }
})->name("comics.comic");
