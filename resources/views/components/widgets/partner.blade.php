<section class="bg-[#f8f9fb] py-[2.5rem] md:py-[5rem] space-y-4 md:space-y-6">
    <div class="container px-[.5rem] md:px-[0px] lg:px-[3rem] mx-auto flex items-center justify-between">
        @include('components.widgets.title', ['title' => 'Ils nous font confiance'])
    </div>

    <div class="py-5">
        @if ($partners)
            <div id="partner-carroussel" class="container mx-auto flex justify-center h-[50px] gap-2">
                @foreach ($partners as $item)
                    <img src="{{ asset($item->image ?? 'assets/images/logos/sponsor1.png') }}"
                        class="mx-4 w-16 object-contain" alt="Partner Logo">
                @endforeach
            </div>
        @endif
    </div>
</section>
