@extends('layouts.main')

@section('title', 'Catalogue')

@section('content')
    @include('components.widgets.breadcrumb', ['pageTitle' => 'Catalogue'])

    <section class="container mx-auto py-[2.5rem] md:py-[5rem]">
        <div class="block md:flex justify-end mb-[2rem]">
            <div class="flex items-center gap-4 text-sm sm:text-[1rem] leading-7">
                <label class="mb-0 font-semibold">Catégories</label>
                <select id="category-filter"
                    class="py-1 px-2 block border border-gray-200 rounded-md bg-white focus:outline-none focus:ring-0">
                    <option value="">Sélectionner une catégorie</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="flex flex-col items-center">
            @if ($machines && $machines->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach ($machines as $item)
                        <a href="{{ route('view.detail', $item->id) }}"
                            class="h-[400px] block bg-gray-200 relative space-y-4 rounded-xl hover:shadow-lg transition-all ease-in-out duration-300 cursor-pointer">
                            <div class="h-full w-full overflow-hidden rounded-xl">
                                <img src="{{ asset($item->image ?? 'assets/images/brand/1.png') }}"
                                    class="w-full h-full object-cover" alt="">
                            </div>
                            <div
                                class="bg-white absolute bottom-2 p-4 rounded-xl space-y-2 inset-x-0 mx-auto w-[90%] h-[160px]">
                                <h2 class="text-sm sm:text-[1rem] font-semibold">{{ $item->name }}</h2>
                                <p class="text-xs sm:text-[0.9rem] text-gray-600">Model & puissance: <span
                                        class="font-semibold">{{ $item->model }}</span>
                                </p>
                                <p class="text-xs sm:text-[0.9rem] text-gray-600">Prix de location/jour: <span
                                        class="font-semibold">{{ $item->price }}
                                        FCFA</span></p>
                                <p class=" hover:text-[#f2722b] hover:underline">En savoir plus</p>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="mt-[2rem] w-full">
                    {{ $machines->links('pagination::tailwind') }}
                </div>
            @else
                <div class="w-full flex flex-col items-center">
                    @include('components.no-data')
                    <h2 class="text-[1rem] md:text-[1.125rem] lg:text-[1.25rem] mt-[1rem]">Pas de données pour le moment
                    </h2>
                </div>
            @endif
        </div>
    </section>

    @include('components.widgets.testimonial')
@endsection
