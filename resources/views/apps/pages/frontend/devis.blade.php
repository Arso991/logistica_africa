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
                <h2 class="text-sm sm:text-[1rem] text-center font-semibold mb-6">Récapitulatif</h2>
                @if ($cart && count($cart) > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @foreach ($cart as $item)
                            <div class="flex items-center gap-4 bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                                <div class="w-32 h-32 rounded-lg overflow-hidden">
                                    <img src="{{ asset($item['product']['image'] ?? 'assets/images/no-image.jpeg') }}"
                                        alt="{{ $item['product']['name'] }}" class="w-full h-full object-cover ">
                                </div>
                                <div class="flex-1 block lg:flex gap-4 items-center">
                                    <div>
                                        <h3 class="text-lg text-gray-800">
                                            {{ strlen($item['product']['name'] ?? '') > 30 ? substr($item['product']['name'], 0, 30) . '...' : $item['product']['name'] ?? 'N/A' }}
                                        </h3>
                                        <span
                                            class="text-lg font-semibold text-nowrap text-gray-900 mr-4">{{ $item['total'] }}
                                            F CFA /Jours</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-2">
                                            <form action="{{ route('cart.decrease') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id"
                                                    value="{{ $item['product']['id'] }}">
                                                <button
                                                    class="text-gray-600 hover:text-gray-800 focus:outline-none mr-4 font-semibold text-lg">-</button>
                                            </form>

                                            <span class="text-gray-700 w-[15px]">
                                                <input class="outline-none w-full" type="text"
                                                    value="{{ $item['qty'] }}">
                                            </span>

                                            <form action="{{ route('cart.increase') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id"
                                                    value="{{ $item['product']['id'] }}">
                                                <button
                                                    class="text-gray-600 hover:text-gray-800 focus:outline-none font-semibold ml-4 text-lg">+</button>
                                            </form>
                                        </div>
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $item['product']['id'] }}">
                                            <button class="text-red-600 hover:text-red-800 focus:outline-none ml-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                    viewBox="0 0 24 24">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="1.5"
                                                        d="M4.687 6.213L6.8 18.976a2.5 2.5 0 0 0 2.466 2.092h3.348m6.698-14.855L17.2 18.976a2.5 2.5 0 0 1-2.466 2.092h-3.348m-1.364-9.952v5.049m3.956-5.049v5.049M2.75 6.213h18.5m-6.473 0v-1.78a1.5 1.5 0 0 0-1.5-1.5h-2.554a1.5 1.5 0 0 0-1.5 1.5v1.78z" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <h1 class="text-center text-sm sm:text-[1rem]">Pas de machine selectionnée. Vous pouvez choisir une
                        machine
                        pour une demande de devis <a class="text-blue-700 hover:underline"
                            href="{{ route('view.catalog') }}">ici</a> </h1>
                @endif

                <div class="mt-6 flex justify-center">
                    <button id="next-step" class="px-6 py-2 btn-custom">Continuer</button>
                </div>
            </div>
            <div class="hidden" id="form-section">
                <h2 class="text-sm sm:text-[1rem] text-center font-semibold mb-6">Informations</h2>
                <form action="{{ route('cart.save') }}" method="POST" class="space-y-4">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex flex-col space-y-1">
                            <label for="client_lastname">Nom <span class="text-red-500">*</span></label>
                            <input type="text" id="client_lastname" placeholder="Veuillez entrer le nom"
                                name="client_lastname" value="{{ old('client_lastname') }}"
                                class="rounded-md border border-gray-200 focus:outline-none border-1 py-2 px-4 outline-none w-full">
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label for="client_firstname">Prénom <span class="text-red-500">*</span></label>
                            <input type="text" id="client_firstname" placeholder="Veuillez entrer le prénom"
                                name="client_firstname" value="{{ old('client_firstname') }}"
                                class="rounded-md border border-gray-200 focus:outline-none border-1 py-2 px-4 outline-none w-full">
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label for="client_company">Entreprise </label>
                            <input type="text" id="client_company" placeholder="Veuillez entrer l'entreprise"
                                name="client_company" value="{{ old('client_company') }}"
                                class="rounded-md border border-gray-200 focus:outline-none border-1 py-2 px-4 outline-none w-full">
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label for="client_role">Fonction</label>
                            <input type="text" id="client_role" placeholder="Veuillez entrer la fonction"
                                name="client_role" value="{{ old('client_role') }}"
                                class="rounded-md border border-gray-200 focus:outline-none border-1 py-2 px-4 outline-none w-full">
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label for="client_phone">Téléphone</label>
                            <input type="text" id="client_phone" max="14"
                                placeholder="Veuillez entrer le téléphone" name="client_phone"
                                value="{{ old('client_phone') }}"
                                class="rounded-md border border-gray-200 focus:outline-none border-1 py-2 px-4 outline-none w-full">
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label for="client_email">Email <span class="text-red-500">*</span> </label>
                            <input type="email" id="client_email" placeholder="Veuillez entrer l'email"
                                name="client_email" value="{{ old('client_email') }}"
                                class="rounded-md border border-gray-200 focus:outline-none border-1 py-2 px-4 outline-none w-full">
                        </div>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="motif">Motif</label>
                        <textarea id="motif" placeholder="Veuillez entrer le motif" name="motif" rows="4"
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
