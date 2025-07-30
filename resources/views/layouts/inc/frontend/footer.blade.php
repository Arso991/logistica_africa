<!-- FOOTER OPEN -->
<div class="pt-10 pb-2 bg-[#f8f9fb]">
    <div class="container mx-auto space-y-2">
        <div class="block md:flex gap-6">
            <div class="w-full md:w-1/2">
                <div class="w-[6rem] md:w-[8rem] h-[4rem]">
                    <img src="{{ asset('assets/images/brand/logo.png') }}" alt="Logo"
                        class="w-full h-full object-contain">
                </div>
                <div class="flex items-center gap-2">
                    <div
                        class="h-6 w-6 p-4 bg-white rounded-full border-2 hover:border-[#f2722b] flex items-center justify-center cursor-pointer transition-all ease-in-out duration-300">
                        <span class="mdi mdi-facebook text-xl"></span>
                    </div>
                    <div
                        class="h-6 w-6 p-4 bg-white rounded-full border-2 hover:border-[#f2722b] flex items-center justify-center cursor-pointer transition-all ease-in-out duration-300">
                        <span class="mdi mdi-linkedin text-xl"></span>
                    </div>
                    <div
                        class="h-6 w-6 p-4 bg-white rounded-full border-2 hover:border-[#f2722b] flex items-center justify-center cursor-pointer transition-all ease-in-out duration-300">
                        <span class="mdi mdi-whatsapp text-xl"></span>
                    </div>
                </div>
            </div>
            <div class="w-full md:flex-1 mt-6 md:mt-0">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <h2 class="text-[14px] sm:text-lg font-semibold">Pages</h2>
                        <ul class="text-sm sm:text-[1rem] space-y-3">
                            <li>
                                <a href="{{ route('view.home') }}" class="hover:text-[#333333]">Accueil</a>
                            </li>
                            <li>
                                <a href="{{ route('view.about') }}" class="hover:text-[#333333]">A propos de nous</a>
                            </li>
                            <li>
                                <a href="{{ route('view.home') }}#services" class="hover:text-[#333333]">Nos
                                    services</a>
                            </li>
                            <li>
                                <a href="{{ route('view.home') }}#clients" class="hover:text-[#333333]">Nos clients</a>
                            </li>
                        </ul>
                    </div>
                    <div class="space-y-4">
                        <h2 class="text-[14px] sm:text-lg font-semibold">Informations</h2>
                        <ul class="text-sm sm:text-[1rem] space-y-3">
                            <li>
                                <a href="{{ route('view.posts') }}" class="hover:text-[#333333]">Nos actualités</a>
                            </li>
                            <li>
                                <a href="{{ route('view.contact') }}" class="hover:text-[#333333]">Nous contacter</a>
                            </li>
                            <li>
                                <a href="{{ route('view.devis') }}" class="hover:text-[#333333]">Demander un devis</a>
                            </li>
                            <li>
                                <a href="" class="hover:text-[#333333]">Politique de confidentialités</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full border-b-[1px] h-1"></div>
        <div class="blocl sm:flex items-end justify-between">
            <div class="text-sm sm:text-[1rem]">
                <div class="flex items-center gap-2">
                    <span class="mdi mdi-phone text-xl"></span>
                    <span>Contactez-nous au + 229 01 000 000 000</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="mdi mdi-email text-xl"></span>
                    <span>contact.logisticaafrica.bj</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="mdi mdi-map-marker text-xl"></span>
                    <span>Cotonou - Bénin / Abidjan - Côte d'Ivoire</span>
                </div>
            </div>
            <div class="flex items-center gap-1 mt-2 sm:mt-0">
                <span class="mdi mdi-copyright"></span>
                <span class="text-[12px]">2025 Logistica Africa. Tous droits reservés</span>
            </div>
        </div>
    </div>
</div>
<!-- FOOTER CLOSED -->
