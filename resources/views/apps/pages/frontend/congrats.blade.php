@extends('layouts.main')

@section('title', 'Demande de devis')

@section('content')
    @include('components.widgets.breadcrumb', [
        'pageTitle' => 'Félicitations',
    ])


    <section class="container mx-auto py-[2.5rem] md:py-[5rem] flex justify-center">
        <div class="border rounded-md p-5 w-[500px]">
            <!-- Onglets -->
            <div class="flex justify-center">
                @include('components.congrats')
            </div>

            <p class="text-center text-sm sm:text-[1rem] leading-7">Votre demande de devis a été enregistrée avec succès.
                Notre équipe vous contactera dans
                les plus brefs
                délais. Veuillez consulter l'adresse e-mail que vous avez fournie.</p>

            <div class="flex justify-center">
                <a class="btn-custom normal-case" href="{{ route('view.home') }}">Retour à l'acceuil</a>
            </div>

        </div>
    </section>

@endsection
