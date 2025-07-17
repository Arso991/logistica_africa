@extends('layouts.main')

@section('title', 'Catalogue')

@section('content')
    @include('components.widgets.breadcrumb', ['pageTitle' => 'Catalogue'])

    <section class="container mx-auto py-[2.5rem] md:py-[5rem]">
        <div class="block md:flex justify-end">
            <div class="flex items-center gap-4 text-sm sm:text-[1rem] leading-7">
                <label class="mb-0 font-semibold">Catégories</label>
                <select class="py-1 px-2 block border border-gray-200 rounded-md bg-white focus:outline-none focus:ring-0">
                    <option value="">Sélectionner une catégorie</option>
                </select>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div
                    class="h-[400px] relative space-y-4 rounded-xl hover:shadow-md transition-all ease-in-out duration-300 cursor-pointer">
                    <div class="h-full w-full overflow-hidden rounded-xl">
                        <img src="{{ asset('assets/images/brand/1.png') }}" class="w-full h-full object-cover"
                            alt="">
                    </div>
                    <div class="bg-white absolute bottom-2 p-4 rounded-xl space-y-2 inset-x-0 mx-auto w-[90%]">
                        <h2 class="text-sm sm:text-[1rem] font-semibold">Engin de chantier</h2>
                        <p class="text-xs sm:text-[0.9rem] text-gray-600">Model: <span class="font-semibold">XYZ-123</span>
                        </p>
                        <p class="text-xs sm:text-[0.9rem] text-gray-600">Puissance: <span class="font-semibold">129
                                Kw</span> </p>
                        <p class="text-xs sm:text-[0.9rem] text-gray-600">Prix: <span class="font-semibold">10,000
                                FCFA</span></p>
                        <p class=" hover:text-[#f2722b] hover:underline">En savoir plus</p>
                    </div>
                </div>

                <div
                    class="h-[400px] relative space-y-4 rounded-xl hover:shadow-md transition-all ease-in-out duration-300 cursor-pointer">
                    <div class="h-full w-full overflow-hidden rounded-xl">
                        <img src="{{ asset('assets/images/brand/1.png') }}" class="w-full h-full object-cover"
                            alt="">
                    </div>
                    <div class="bg-white absolute bottom-2 p-4 rounded-xl space-y-2 inset-x-0 mx-auto w-[90%]">
                        <h2 class="text-sm sm:text-[1rem] font-semibold">Engin de chantier</h2>
                        <p class="text-xs sm:text-[0.9rem] text-gray-600">Model: <span class="font-semibold">XYZ-123</span>
                        </p>
                        <p class="text-xs sm:text-[0.9rem] text-gray-600">Puissance: <span class="font-semibold">129
                                Kw</span> </p>
                        <p class="text-xs sm:text-[0.9rem] text-gray-600">Prix: <span class="font-semibold">10,000
                                FCFA</span></p>
                        <p class="hover:text-[#f2722b] hover:underline">En savoir plus</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.widgets.testimonial')
@endsection
