<!-- FOOTER OPEN -->
<div class="py-[2rem] md:py-[3rem] bg-black text-white border-y border-white">
    <div class="container px-[1rem] md:px-[0px] lg:px-[3rem] mx-auto space-y-6">
        <div class="block md:flex gap-6">
            <div class="w-full md:w-1/2 flex md:block flex-col space-y-4">
                <div class="w-[14rem] md:w-[16rem] -ml-[25px] h-[4rem]">
                    <img src="{{ asset('assets/images/brand/logo-compact-blanc.png') }}" alt="Logo"
                        class="w-full h-full object-contain">
                </div>
                <div class="flex items-center gap-2 text-black">
                    <a target="_blank" href="https://web.facebook.com/logisticaafrica"
                        class="h-6 w-6 p-4 bg-white rounded-full border-2 hover:border-[#f2722b] flex items-center justify-center cursor-pointer transition-all ease-in-out duration-300">
                        <span class="mdi mdi-facebook text-xl"></span>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/company/logisticafrica/"
                        class="h-6 w-6 p-4 bg-white rounded-full border-2 hover:border-[#f2722b] flex items-center justify-center cursor-pointer transition-all ease-in-out duration-300">
                        <span class="mdi mdi-linkedin text-xl"></span>
                    </a>

                    <a target="_blank" href="https://www.tiktok.com/@logistica.africa?_t=ZM-8z0mDhRr2Cj&_r=1"
                        class="h-[2.3rem] w-[2.3rem] bg-white rounded-full border-2 hover:border-[#f2722b] flex items-center justify-center cursor-pointer transition-all ease-in-out duration-300">
                        <img src="https://img.icons8.com/?size=100&id=soupkpLfTkZi&format=png&color=000000"
                            class=" hover:text-[#f2722b] w-[24px]" alt="">
                    </a>

                </div>
            </div>
            <div class="w-full md:flex-1 mt-6 md:mt-0">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 uppercase">
                    <div class="space-y-4 ">
                        <h2 class="text-[14px] sm:text-lg font-semibold">Pages</h2>
                        <ul class="text-sm sm:text-[1rem] space-y-3">
                            <li>
                                <a href="{{ route('view.home') }}" class="hover:font-bold hover:underline">Accueil</a>
                            </li>
                            <li>
                                <a href="{{ route('view.about') }}" class="hover:font-bold hover:underline">A
                                    propos de nous</a>
                            </li>
                            <li>
                                <a href="{{ route('view.home') }}#services" class="hover:font-bold hover:underline">Nos
                                    services</a>
                            </li>
                            <li>
                                <a href="{{ route('view.home') }}#clients" class="hover:font-bold hover:underline">Nos
                                    clients</a>
                            </li>
                        </ul>
                    </div>
                    <div class="space-y-4 ">
                        <h2 class="text-[14px] sm:text-lg font-semibold">Informations</h2>
                        <ul class="text-sm sm:text-[1rem] space-y-3">
                            <li>
                                <a href="{{ route('view.posts') }}" class="hover:font-bold hover:underline">Nos
                                    actualités</a>
                            </li>
                            <li>
                                <a href="{{ route('view.contact') }}" class="hover:font-bold hover:underline">Nous
                                    contacter</a>
                            </li>
                            <li>
                                <a href="{{ route('view.devis') }}" class="hover:font-bold hover:underline">Demander un
                                    devis</a>
                            </li>
                            <li>
                                <a href="{{ route('view.privacy') }}" class="hover:font-bold hover:underline">Politique
                                    de
                                    confidentialité</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="w-full border-b-[1px] h-1"></div> --}}
        {{-- <div class="block sm:flex items-end justify-between">
            <div class="text-sm sm:text-[1rem]">
                <div class="flex items-center gap-2">
                    <span class="mdi mdi-phone text-xl"></span>
                    <span>Contactez-nous au +229 01 48 65 55 55</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="mdi mdi-email text-xl"></span>
                    <span>contact@logisticafrica.com</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="mdi mdi-map-marker text-xl"></span>
                    <span>Cotonou - Bénin </span>
                </div>
            </div>
        </div> --}}

    </div>
</div>
<div class="py-[1rem] text-black bg-gray-200">
    <div class="flex justify-center items-center gap-1 ">
        <span class="mdi mdi-copyright"></span>
        <span class="text-[12px]">2025 Logistica Africa. Tous droits reservés</span>
    </div>
</div>
<!-- FOOTER CLOSED -->
