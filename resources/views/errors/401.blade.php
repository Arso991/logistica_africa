@extends('layouts.error')

@section('title', 'Non autorisé')

@section('content')
    <section class="min-h-screen flex flex-col justify-center items-center text-center px-4">
        <h1 class="text-7xl font-bold text-yellow-500">401</h1>
        <p class="text-xl mt-4 mb-6">Vous n'êtes pas autorisé à accéder à cette page.</p>
        <a href="{{ url('/') }}" class="btn-custom px-4 py-2">Retour à l'accueil</a>
    </section>
@endsection
