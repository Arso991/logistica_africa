<section class="mb-[2.5rem] md:mb-[5rem] bg-[#f8f9fb]">
    <div class="container mx-auto py-[2.5rem] space-y-4 md:space-y-6">
        @include('components.widgets.title', ['title' => 'A propos de nous'])

        <div class="block md:flex gap-[2rem] items-center">
            <div class="w-full md:w-1/2">
                <div class="w-full overflow-hidden rounded-xl">
                    <img src="{{ asset('assets/images/brand/machine1.jpg') }}" class="w-full h-full object-cover"
                        alt="About">
                </div>
            </div>
            <div class="w-full md:w-1/2 mt-4 md:mt-0 space-y-6">
                <p class="text-sm sm:text-[1rem] leading-7">Créée en décembre 2022, Logistica Africa est spécialisée
                    dans
                    l'optimisation logistique des projets de génie civil et des chantiers de construction.
                    Notre mission : accompagner les entreprises du BTP en leur fournissant des solutions logistiques
                    fiables, efficaces et sur mesure, parfaitement adaptées aux exigences techniques et aux contraintes
                    de leurs projets.
                    Grâce à notre expertise du terrain, notre réactivité et notre maîtrise opérationnelle, nous
                    contribuons chaque jour à la réussite des chantiers de nos clients.</p>
                <button class="btn-custom px-4 py-2">Lire
                    plus
                </button>
            </div>
        </div>
    </div>
</section>
