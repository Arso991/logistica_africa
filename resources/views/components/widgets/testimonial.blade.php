<section class="container mx-auto mb-[2.5rem] md:mb-[5rem] space-y-4 md:space-y-6">
    <div class="flex items-center justify-between">
        @include('components.widgets.title', ['title' => 'Avis client'])
        <div>
            Arrow
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div class="space-y-4 p-4 text-sm sm:text-[1rem] bg-[#f8f9fb] rounded-md">
            <div class="flex items-center gap-4">
                <div class="w-[4rem] h-[4rem] overflow-hidden rounded-full">
                    <img src="{{ asset('assets/images/brand/machine4.jpg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <h2 class="font-semibold">Hermann H.</h2>
            </div>
            <p>Bon accueil, matériel de qualité. Je recommande vivement!</p>
        </div>

        <div class="space-y-4 p-4 text-sm sm:text-[1rem] bg-[#f8f9fb] rounded-md">
            <div class="flex items-center gap-4">
                <div class="w-[4rem] h-[4rem] overflow-hidden rounded-full">
                    <img src="{{ asset('assets/images/brand/machine4.jpg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <h2 class="font-semibold">Hermann H.</h2>
            </div>
            <p>Bon accueil, matériel de qualité. Je recommande vivement!</p>
        </div>

        <div class="space-y-4 p-4 text-sm sm:text-[1rem] bg-[#f8f9fb] rounded-md">
            <div class="flex items-center gap-4">
                <div class="w-[4rem] h-[4rem] overflow-hidden rounded-full">
                    <img src="{{ asset('assets/images/brand/machine4.jpg') }}" class="w-full h-full object-cover"
                        alt="">
                </div>
                <h2 class="font-semibold">Hermann H.</h2>
            </div>
            <p>Bon accueil, matériel de qualité. Je recommande vivement!</p>
        </div>
    </div>
</section>
