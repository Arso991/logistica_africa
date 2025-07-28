<section class="container mx-auto mb-[2.5rem] md:mb-[5rem] space-y-4 md:space-y-6">
    <div class="flex items-center justify-between">
        @include('components.widgets.title', ['title' => 'Avis client'])
        <div>
            Arrow
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($testimonials as $item)
            <div class="space-y-4 p-4 text-sm sm:text-[1rem] bg-[#f8f9fb] rounded-md">
                <div class="flex items-center gap-4">
                    <div class="w-[4rem] h-[4rem] overflow-hidden rounded-full">
                        <img src="{{ asset($item->image) }}" class="w-full h-full object-cover" alt="Avatar">
                    </div>
                    <h2 class="font-semibold">{{ $item->name }}</h2>
                </div>
                <p>{{ $item->description }}</p>
            </div>
        @endforeach
    </div>
</section>
