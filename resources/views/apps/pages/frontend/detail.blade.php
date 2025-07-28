@extends('layouts.main')

@section('title', 'Details d\'un engin')

@section('content')
    @include('components.widgets.breadcrumb', [
        'pageTitle' => $machine->name ? $machine->name : 'Details d\'un engin',
    ])

    <section class="container mx-auto py-[2.5rem] md:py-[5rem]">
        <div class="block md:flex gap-6">
            <div class="w-full md:w-1/2 space-y-6">
                <h2 class="text-lg sm:text-[1.5rem] leading-7 font-semibold">{{ $machine->name }}</h2>
                <div class="text-sm sm:text-[1rem] leading-7 space-y-2">
                    <h2 class="font-semibold">Informations générales</h2>
                    <div class="flex items-center py-2 bg-gray-50 px-2 rounded-sm justify-between">
                        <p>Fabricant</p>
                        <p>{{ $machine->productor_name }}</p>
                    </div>
                    <div class="flex items-center py-2 bg-gray-50 px-2 rounded-sm justify-between">
                        <p>Capacité</p>
                        <p>{{ $machine->capacity }}</p>
                    </div>
                    <div class="flex items-center py-2 bg-gray-50 px-2 rounded-sm justify-between">
                        <p>Modèle & Puissance</p>
                        <p>{{ $machine->model }}</p>
                    </div>
                    <div class="flex items-center py-2 bg-gray-50 px-2 rounded-sm justify-between">
                        <p>Année de fabrication</p>
                        <p>{{ $machine->production_year }}</p>
                    </div>
                    <div class="flex items-center py-2 bg-gray-50 px-2 rounded-sm justify-between">
                        <p>Télécharger fiche technique</p>
                        <a href=""
                            class="h-[1.5rem] w-[1.5rem] rounded-full border border-[#333333] flex justify-center items-center">
                            <span class="mdi mdi-download"></span>
                        </a>
                    </div>
                </div>
                <div class="text-sm sm:text-[1rem] leading-7 border-b border-gray-200 space-y-2">
                    <h2 class="font-semibold">Tarif de location journalière</h2>
                    <div class="flex items-center justify-between">
                        <p>{{ $machine->price }} F CFA</p>
                        <a href="{{ route('view.devis') }}" class=" btn-custom">Demander un devis
                        </a>
                    </div>
                </div>
                <div class="text-sm sm:text-[1rem] leading-7 space-y-2">
                    <h2 class="font-semibold">Description</h2>
                    <p>{{ $machine->description }}</p>
                </div>
            </div>
            <div class="w-full md:flex-1 mt-6 md:mt-0">
                <div class="h-[400px] rounded-lg overflow-hidden mb-4">
                    <img src="{{ asset($machine->image) }}" alt="{{ $machine->name }}" class="w-full h-ful object-cover">
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                    <div class="border p-1">
                        <img src="{{ asset($machine->image) }}" alt="{{ $machine->name }}"
                            class="w-full h-ful object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
