<section>
    <div style="background:url('{{ asset($banner->background_image ?? 'assets/images/brand/machine3.jpg') }}') center; background-repeat: no-repeat; background-size: cover;"
        class="h-[550px] max-h-auto relative">
        <div class="h-full w-full bg-black opacity-80"></div>

        <div class="absolute inset-y-0 left-0 w-full flex items-center">
            <div class="container mx-auto">
                <div class="w-full md:w-1/2 text-white text-lg md:text-xl text-center md:text-start">
                    <h1 class="text-xl md:text-2xl font-bold mb-[1rem] uppercase">{{ $banner->title }}</h1>
                    <p class="text-sm sm:text-[1rem] leading-7">{{ $banner->subtitle }}</p>
                </div>
            </div>
        </div>

        <div id="banner-carousel"
            class="hidden md:block absolute w-[250px] sm:w-[350px] md:w-[450px] h-[300px] sm:h-[400px] rounded-tl-[20%] overflow-hidden bottom-0 right-0">
            @foreach (json_decode($banner->carrousel_images) as $image)
                <img src="{{ asset($image) }}" class="w-full h-full object-cover" alt="Carrousel">
            @endforeach
        </div>
    </div>
</section>
