<?php

// bisogna utilizzare il PageController, pertanto importarlo
use App\Http\Controllers\Guest\PageController;

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

/***** PRIMA DI INTRODURRE I CONTROLLER

Route::get('/', function () {
    return view('home');
});

Route::get('/libri', function () {
    // accetta array associativi
    $libri = ['titolo' => 'titolo 1', 'autore' => 'autore 1'];

    // sto passando l'array associativo alla pagina libri.blade.php
    //return view('pages.libri',$libri);

    // con la funzione COMPACT l'array viene compatato, appunto, il che ne semplifica la gestione e l'accesso di una grande mole di dati nei template. Trasforma i dati in un array associativo
    return view('pages.libri', compact('libri'));
});

*****/

// rotta al percorso indicato (in questo caso la home page), prendi il controller ed esegui il metodo index. Il metodo name mi aiuta per recuperare il nome dela rotta da utilizzare, ad esempi, nei link
Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/libri', [PageController::class, 'getLibri'])->name('libri');
