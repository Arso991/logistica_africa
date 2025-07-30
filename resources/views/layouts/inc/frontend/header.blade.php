<!-- app-Header -->
<div class="container mx-auto max-h-10 py-2 flex items-center justify-between space-x-2 ">
    <div class="hidden md:flex items-center gap-2">
        <span class="text-xl mdi mdi-phone"></span>
        <p class="italic"> Contactez-nous au : 01 000 000 000</p>
    </div>
    <div class="relative">
        <form action="{{ route('view.catalog') }}" method="GET">
            @csrf
            <input value="{{ request('search') }}" name="search"
                class="rounded-xl border-gray-200 focus:outline-none border py-1 px-4 outline-none w-full" type="text"
                placeholder="Rechercher un materiel...">
            <button onclick="this.form.submit()"
                class="absolute z-30 inset-y-0 right-0 flex items-center pr-2 cursor-pointer">
                <span class="mdi mdi-magnify text-xl text-[#f2722b]"></span>
            </button>
        </form>
    </div>
    <div class="flex items-center gap-3">
        <a target="_blank" href="#" class="hover:text-[#f2722b]">
            <span class="text-xl mdi mdi-facebook"></span>
        </a>

        <a target="_blank" href="#" class="hover:text-[#f2722b]">
            <span class="text-xl mdi mdi-linkedin"></span>
        </a>
    </div>
</div>
<div id="navbar" class="h-18 fixed py-[0.5rem] left-0 right-0 backdrop-blur-sm z-50 flex items-center shadow-sm">
    <div class="container mx-auto flex items-center justify-between">
        <div class="w-[6rem] md:w-[8rem] h-[4rem] -mb-[1rem]">
            <img src="{{ asset('assets/images/brand/logo.png') }}" alt="Logo" class="w-full h-full object-contain ">
        </div>
        <ul id="menu-list" class="hidden md:flex items-center gap-4 text-lg text-[#ffffff]">
            <li>
                <a href="{{ route('view.home') }}"
                    class="hover:text-[#f2722b] transition-all ease-in-out duration-300 {{ Request::is('/') ? 'font-medium text-[#f2722b]' : '' }}">Accueil</a>
            </li>
            <li>
                <a href="{{ route('view.about') }}"
                    class="hover:text-[#f2722b] transition-all ease-in-out duration-300 {{ Request::is('about') ? 'font-medium text-[#f2722b]' : '' }}">A
                    propos</a>
            </li>
            <li>
                <a href="{{ route('view.catalog') }}"
                    class="hover:text-[#f2722b] transition-all ease-in-out duration-300 {{ Request::is('catalog') || Request::is('detail*') || Request::is('devis*') || Request::is('congrats*') || Request::is('search*') ? 'font-medium text-[#f2722b]' : '' }}">Catalogue</a>
            </li>
            <li>
                <a href="{{ route('view.posts') }}"
                    class="hover:text-[#f2722b] transition-all ease-in-out duration-300 {{ Request::is('posts') || Request::is('post*') ? 'font-medium text-[#f2722b]' : '' }}">Actualités</a>
            </li>
            <li>
                <a href="{{ route('view.contact') }}"
                    class="hover:text-[#f2722b] transition-all ease-in-out duration-300 {{ Request::is('contact') ? 'font-medium text-[#f2722b]' : '' }}">Contacts</a>
            </li>
        </ul>
        <div class="flex items-center gap-3">
            <a href="{{ route('view.devis') }}" class="hidden sm:flex items-center btn-custom">Devis
                <span class="mdi mdi-calculator text-lg"></span></a>
            <div class="block md:hidden">
                <span id="openSidebar" class="mdi mdi-menu text-3xl text-[#ffffff] cursor-pointer"></span>
            </div>
        </div>
    </div>
</div>
<!-- /app-Header -->

{{-- app-Sidebar --}}
<div class="fixed top-0 left-0 w-full h-screen z-[9999] transition duration-300 ease-in-out hidden sidebar-container">
    <div class="w-full h-full backdrop-blur-sm sidebar-overlay"></div>
    <div class="absolute top-0 right-0 w-[250px] md:w-[300px] h-full bg-white p-[2rem]">
        <div class="flex flex-col gap-[2rem]">
            <div class="flex justify-end">
                <a href="javascript:void();" id="closeSidebar" class="hover:text-[#000000]">
                    <i class="mdi mdi-close text-2xl font-medium"></i>
                </a>
            </div>

            {{-- <div class="w-[10rem] h-[10rem] overflow-hidden">
                <img src="{{ asset('assets/images/brand/logo3.png') }}"
                    class="w-full h-full object-cover -ml-[2rem] -mt-[2rem]" alt="">
            </div> --}}

            <ul class="flex flex-col gap-[1.5rem]">
                <li>
                    <a class="text-[1rem]  hover:text-[#f2722b] transition-all ease-in-out duration-300"
                        href="{{ route('view.home') }}">Accueil</a>
                </li>
                <li>
                    <a class="text-[1rem]  hover:text-[#f2722b] transition-all ease-in-out duration-300"
                        href="{{ route('view.about') }}">A propos</a>
                </li>
                <li>
                    <a class="text-[1rem]  hover:text-[#f2722b] transition-all ease-in-out duration-300"
                        href="{{ route('view.catalog') }}">Catalogue</a>
                </li>
                <li>
                    <a class="text-[1rem]  hover:text-[#f2722b] transition-all ease-in-out duration-300"
                        href="{{ route('view.posts') }}">Actualités</a>
                </li>
                <li>
                    <a class="text-[1rem]  hover:text-[#f2722b] transition-all ease-in-out duration-300"
                        href="{{ route('view.contact') }}">Contacts</a>
                </li>
            </ul>

            <div class="flex sm:hidden">
                <a href="{{ route('view.devis') }}" class="flex items-center btn-custom">Devis
                    <span class="mdi mdi-calculator text-lg"></span></a>
            </div>
        </div>

    </div>
</div>
{{-- /app-Sidebar --}}
