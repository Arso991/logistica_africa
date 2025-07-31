@extends('layouts.error')

@section('title', 'Page introuvable')

@section('content')
    <section class="min-h-screen flex flex-col justify-center items-center text-center p-10">
        <h1 class="text-6xl font-bold text-red-500 mb-4">404</h1>
        <p class="text-xl mb-6">Oups ! La page que vous recherchez n'existe pas.</p>
        <a href="{{ url('/') }}" class="btn-custom px-4 py-2">Retour à l'accueil</a>
    </section>
@endsection
