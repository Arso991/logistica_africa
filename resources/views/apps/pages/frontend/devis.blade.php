@extends('layouts.main')

@section('title', 'Demande de devis')

@section('content')
    @include('components.widgets.breadcrumb', [
        'pageTitle' => 'Demande de devis',
    ])


    <section class="container mx-auto py-[2.5rem] md:py-[5rem]">
        <div class="border rounded-md p-5">
            <!-- Onglets -->
            <div class="flex justify-center mb-6 space-x-4">
                <button id="show-recap"
                    class="switcher-btn px-4 py-2 rounded-md text-sm font-semibold bg-primary text-[#f2722b] border border-[#f2722b]">
                    Récapitulatif
                </button>
                <button id="show-form"
                    class="switcher-btn px-4 py-2 rounded-md text-sm font-semibold bg-gray-200 text-gray-700">
                    Formulaire
                </button>
            </div>

            <div class="" id="recap-section">
                <h2 class="text-lg font-semibold mb-6 text-center">Récapitulatif</h2>

                <div class="mt-6 flex justify-center">
                    <button id="next-step" class="px-6 py-2 btn-custom">Continuer</button>
                </div>
            </div>
            <div class="hidden" id="form-section">
                <h2 class="text-sm sm:text-[1rem] text-center font-semibold mb-6">Demande de devis</h2>
                <form action="" method="POST" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex flex-col space-y-1">
                            <label for="email">Nom</label>
                            <input type="email" id="email" placeholder="Veuillez entrer le nom" name="email"
                                class="rounded-md border border-gray-200 focus:outline-none border-1 py-2 px-4 outline-none w-full">
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label for="subject">Prénom</label>
                            <input type="text" id="subject" placeholder="Veuillez entrer le prénom" name="subject"
                                class="rounded-md border border-gray-200 focus:outline-none border-1 py-2 px-4 outline-none w-full">
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label for="subject">Entreprise</label>
                            <input type="text" id="subject" placeholder="Veuillez entrer l'entreprise" name="subject"
                                class="rounded-md border border-gray-200 focus:outline-none border-1 py-2 px-4 outline-none w-full">
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label for="subject">Fonction</label>
                            <input type="text" id="subject" placeholder="Veuillez entrer la fonction" name="subject"
                                class="rounded-md border border-gray-200 focus:outline-none border-1 py-2 px-4 outline-none w-full">
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label for="subject">Téléphone</label>
                            <input type="text" id="subject" placeholder="Veuillez entrer le téléphone" name="subject"
                                class="rounded-md border border-gray-200 focus:outline-none border-1 py-2 px-4 outline-none w-full">
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label for="subject">Email</label>
                            <input type="text" id="subject" placeholder="Veuillez entrer l'email" name="subject"
                                class="rounded-md border border-gray-200 focus:outline-none border-1 py-2 px-4 outline-none w-full">
                        </div>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="message">Motif</label>
                        <textarea id="message" placeholder="Veuillez entrer le motif" name="message" rows="4"
                            class="rounded-md border border-gray-200 focus:outline-none border-1 py-2 px-4 outline-none w-full"></textarea>
                    </div>
                    <div class="flex justify-start mt-4">
                        <button type="submit" class="px-4 py-2 btn-custom">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
