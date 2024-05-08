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

Route::get('/', function() {

    $data = [
        'text' => 'Hello World'
    ];
    return view('home', $data);
})->name('home');

Route::get('/Lorem', function() {

    $data = [
        'text' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium eius obcaecati est animi earum deleniti minus ea! Rem, necessitatibus dolorem!'
    ];
    return view('Lorem', $data);
})->name('Lorem');

Route::get('/Info', function() {

    $data = [
        'text' => 'Ciao Ciao'
    ];
    return view('Info', $data);
})->name('Info');
