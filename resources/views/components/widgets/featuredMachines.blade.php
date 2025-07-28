<section class="container mx-auto pb-[2.5rem] md:pb-[5rem] space-y-4 md:space-y-6">
    <div class="flex items-center justify-between">
        @include('components.widgets.title', ['title' => 'Machines en vedette'])

        <button class="btn-custom px-4 py-2 text-nowrap">Voir plus</button>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($machines as $item)
            <div
                class="space-y-4 rounded-xl overflow-hidden cursor-pointer hover:shadow-lg transition-shadow duration-300">
                <div class="h-[300px] ">
                    <img src="{{ asset($item->image ?? 'assets/images/brand/machine2.jpg') }}"
                        class="w-full h-full object-cover" alt="">
                </div>
                <div class="text-sm sm:text-[1rem] space-y-2 px-2 py-4 rounded-b-xl">
                    <h1 class="font-semibold">{{ $item->name }}</h1>
                    <a href="" class="hover:underline hover:text-[#f2722b] block">Voir</a>
                </div>
            </div>
        @endforeach
    </div>
</section>
