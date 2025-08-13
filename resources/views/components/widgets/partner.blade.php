<section class="bg-[#f8f9fb] py-[2.5rem] md:py-[5rem] space-y-4 md:space-y-6">
    <div class="container px-[.5rem] md:px-[0px] lg:px-[3rem] mx-auto flex items-center justify-between">
        @include('components.widgets.title', ['title' => 'Ils nous font confiance'])
    </div>

    <div class="py-5">
        <div id="partner-carroussel" class="container mx-auto flex justify-center h-[50px] gap-2">
            <img src="{{ asset('assets/images/logos/sponsor1.png') }}" class="mx-4 w-16 object-contain" alt="Partner Logo">
            <img src="{{ asset('assets/images/logos/sponsor2.png') }}" class="mx-4 w-16 object-contain"
                alt="Partner Logo">
            <img src="{{ asset('assets/images/logos/sponsor3.png') }}" class="mx-4 w-16 object-contain"
                alt="Partner Logo">
            <img src="{{ asset('assets/images/logos/sponsor4.png') }}" class="mx-4 w-16 object-contain"
                alt="Partner Logo">
            <img src="{{ asset('assets/images/logos/sponsor5.png') }}" class="mx-4 w-16 object-contain"
                alt="Partner Logo">
        </div>
    </div>
</section>
