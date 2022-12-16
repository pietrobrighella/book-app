@extends('layouts.app')

@section('titolo', 'Lista dei libri')

@section('content')
    <h1>Pagina dei libri</h1>

    {{-- Anziché utilizzare le chiavi così, utilizziamo COMPACT nelle routes

    <!-- le variabili che mi trovo disponibili nel tempalte sono le chiavi dell'array -->
    {{$titolo}}
    <br>
    {{$autore}} --}}

    {{-- Versione con compact e array direttamente sul codice

    {{$libri['titolo']}}
    <br>
    {{$libri['autore']}} --}}

    {{-- VERSIONE CON ACCESSO A DB --}}
    <ul class="list-unstyled">
        @forelse ($books as $key => $book)
            <li>{{ $key }} - {{ $book->title }}</li>
        @empty
            <p>No users</p>
        @endforelse
    </ul>

@endsection
