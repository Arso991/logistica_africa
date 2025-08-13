<section>
    <div style="background:url('{{ asset($banner->background_image ?? 'assets/images/brand/machine3.jpg') }}') center; background-repeat: no-repeat; background-size: cover;"
        class="h-[550px] max-h-auto relative">
        <div class="h-full w-full bg-black opacity-80"></div>

        <div class="absolute inset-y-0 left-0 w-full flex items-center">
            <div class="container px-[.5rem] md:px-[0px] lg:px-[3rem] mx-auto">
                <div class="w-full md:w-1/2 text-white text-lg md:text-xl text-center md:text-start">
                    <h1 class="text-xl md:text-2xl font-bold mb-[1rem] uppercase">{{ $banner->title }}</h1>
                </div>
            </div>
        </div>

        <div id="banner-carousel"
            class="hidden md:block absolute w-[250px] md:w-[450px] lg:w-[600px] h-[300px] sm:h-[450px] rounded-tl-[20%] overflow-hidden bottom-0 right-0">
            @foreach (json_decode($banner->carrousel_images) as $image)
                <img src="{{ asset($image) }}" class="w-full h-full object-cover" alt="Carrousel">
            @endforeach
        </div>
    </div>
</section>
