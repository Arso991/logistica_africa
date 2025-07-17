@extends('layouts.main')

@section('title', 'A propos')

@section('content')
    @include('components.widgets.breadcrumb', ['pageTitle' => 'A propos'])

    <section class="container mx-auto py-[2.5rem] md:py-[5rem]">
        <div class="block md:flex items-center">
            <div class="w-full md:w-1/2 flex justify-center">
                <div class="w-full md:w-[80%] h-[300px] overflow-hidden rounded-xl">
                    <img src="{{ asset('assets/images/brand/machine3.jpg') }}" class="w-full h-full object-cover"
                        alt="Image">
                </div>
            </div>
            <div class="space-y-4 w-full md:w-1/2 mt-[2rem] md:mt-0">
                <h1 class="text-lg md:text-xl font-semibold text-[#f2722b]">Mission</h1>
                <p class="text-sm sm:text-[1rem] leading-7">Être le partenaire terrain des entreprises du BTP, en leur
                    fournissant des
                    engins et matériels robustes,
                    fiables et adaptés à leurs réalités quotidiennes.
                    Chez Logistica Bénin, on facilite vos chantiers avec des engins performants, une équipe terrain experte,
                    et un service toujours prêt à intervenir.
                </p>
            </div>
        </div>
    </section>
    <section class="mb-[2.5rem] md:mb-[5rem] bg-[#f8f9fb]">
        <div class="container mx-auto py-[2.5rem] space-y-4 md:space-y-6">
            @include('components.widgets.title', ['title' => 'Nos valeurs'])

            <div class="flex justify-center">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="space-y-4 flex flex-col items-center">
                        <div class="w-[8rem] h-[8rem] overflow-hidden rounded-full bg-white p-2">
                            <img src="{{ asset('assets/images/svgs/Logistics-cuate.svg') }}"
                                class="w-full h-full object-contain" alt="Icon">
                        </div>
                        <div class="text-sm sm:text-[1rem] text-center space-y-2 leading-7">
                            <h2 class="font-semibold">Fiabilité</h2>
                            <p>Des engins et matériels contrôlés, entretenus et prêts à l’action, pour que vos chantiers
                                avancent sans coupure ni surprise.
                            </p>
                        </div>
                    </div>

                    <div class="space-y-4 flex flex-col items-center">
                        <div class="w-[8rem] h-[8rem] overflow-hidden rounded-full bg-white p-2">
                            <img src="{{ asset('assets/images/svgs/Logistics-cuate.svg') }}"
                                class="w-full h-full object-contain" alt="Icon">
                        </div>
                        <div class="text-sm sm:text-[1rem] text-center space-y-2 leading-7">
                            <h2 class="font-semibold">Fiabilité</h2>
                            <p>Des engins et matériels contrôlés, entretenus et prêts à l’action, pour que vos chantiers
                                avancent sans coupure ni surprise.
                            </p>
                        </div>
                    </div>

                    <div class="space-y-4 flex flex-col items-center">
                        <div class="w-[8rem] h-[8rem] overflow-hidden rounded-full bg-white p-2">
                            <img src="{{ asset('assets/images/svgs/Logistics-cuate.svg') }}"
                                class="w-full h-full object-contain" alt="Icon">
                        </div>
                        <div class="text-sm sm:text-[1rem] text-center space-y-2 leading-7">
                            <h2 class="font-semibold">Fiabilité</h2>
                            <p>Des engins et matériels contrôlés, entretenus et prêts à l’action, pour que vos chantiers
                                avancent sans coupure ni surprise.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.widgets.testimonial')
@endsection
