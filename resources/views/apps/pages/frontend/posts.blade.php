@extends('layouts.main')

@section('title', 'Actualités')

@section('content')
    @include('components.widgets.breadcrumb', ['pageTitle' => 'Actualités'])

    <section class="container mx-auto py-[2.5rem] md:py-[5rem]">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <div class="space-y-4 rounded-xl hover:shadow-md transition-all ease-in-out duration-300">
                <div class="h-[200px] w-full overflow-hidden rounded-xl">
                    <img src="{{ asset('assets/images/brand/machine2.jpg') }}" class="w-full h-full object-cover"
                        alt="Image">
                </div>
                <div class="p-4 space-y-2">
                    <p class="text-xs sm:text-[0.9rem] text-end text-gray-600">26 janv. 2025</p>
                    <h2 class="text-sm sm:text-[1rem] font-semibold">Découvrez la catalogue Logistica Africa 100%</h2>
                    <p class="text-sm sm:text-[1rem] text-gray-600">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate exercitationem temporibus
                        dolorem...
                    </p>
                    <a href="" class="hover:text-[#f2722b] hover:underline block">Lire
                        plus</a>
                </div>
            </div>
        </div>
    </section>

@endsection
