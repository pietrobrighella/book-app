<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;

// importo la mia classe con il nome del model
use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // il metodo index si chiama così per covenzione
    public function index(){
        return view('home');
    }

    public function getLibri(){
        $books = Book::all();
        //dd($books);
        return view('pages.libri', compact('books'));
    }
}
