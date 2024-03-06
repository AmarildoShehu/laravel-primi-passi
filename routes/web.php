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
    return view('home');
})->name('home');

Route::get('/classe', function () {
    $class = 116;
    $students = [
        'alunno1' => 'Giovanni',
        'alunno2' => 'pasquale',
    ];
    $data = compact('class', 'students');
    return view('classe.lista_alunni', $data);
})->name('classe');