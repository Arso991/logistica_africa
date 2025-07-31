@extends('layouts.error')

@section('title', 'Erreur serveur')

@section('content')
    <section class="min-h-screen flex flex-col justify-center items-center text-center px-4">
        <h1 class="text-7xl font-bold text-red-600">500</h1>
        <p class="text-xl mt-4 mb-6">Une erreur interne est survenue. Nous travaillons à sa résolution.</p>
        <a href="{{ url('/') }}" class="btn-custom px-4 py-2">Retour à
            l'accueil</a>
    </section>
@endsection
