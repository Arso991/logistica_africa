<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Logistica Africa - Entreprise spécialisée dans l'optimisation logistique des projets de genie civil et des chantiers de construction.">
    <meta name="author" content="KKSMARTCOM">
    <meta name="keywords"
        content="logistiques,engins, machines, terrasement,location de machines,location d'engins,manutention,levage,chantiers,flotte,équipements,matériels,devis, btp, transport de granulat, génie civil.">

    @include('layouts.inc.frontend.styles')
</head>

<body class="app ltr landing-page horizontal">

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            {{-- HEADER --}}
            @include('layouts.inc.frontend.header')

            <!--app-content open-->
            <div class="main-content mt-0">
                @yield('content')
            </div>
            <!--app-content closed-->

            @include('shared.alert')
        </div>

        {{-- FOOTER --}}
        @include('layouts.inc.frontend.footer')

    </div>

    <!-- BACK-TO-TOP -->
    {{-- <a href="#top" id="back-to-top"><i class="mdi mdi-whatsapp"></i></a> --}}
    <a id="whatsapp-btn" target="_blank" rel="noopener noreferrer"
        class="h-[50px] w-[50px] hidden justify-center items-center fixed bottom-6 right-6 z-50 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-xl transition ease-in-out duration-400">
        <i class="mdi mdi-whatsapp text-2xl"></i>
    </a>

    <!-- Fenêtre de chat WhatsApp -->
    <div id="whatsapp-popup"
        class="hidden fixed bottom-20 right-6 w-72 bg-white shadow-lg rounded-lg border border-gray-200 z-50">
        <div class="p-4 space-y-3">
            <h3 class="text-base font-semibold">Discuter via WhatsApp</h3>
            <textarea id="whatsapp-message" rows="3" placeholder="Votre message..."
                class="w-full border rounded-md p-2 text-sm resize-none focus:outline-none"></textarea>
            <button id="send-whatsapp"
                class="w-full bg-green-500 text-white rounded-md px-3 py-2 hover:bg-green-600 text-sm">Envoyer sur
                WhatsApp</button>
        </div>
    </div>

    {{-- <div id="cookie-popup"
        class="fixed bottom-4 left-4 right-4 sm:right-auto sm:max-w-md p-4 bg-white rounded-xl shadow-xl border border-gray-200 z-50 flex flex-col sm:flex-row items-start sm:items-center gap-4 text-sm text-gray-700">
        <div>
            <p class="font-semibold">Nous utilisons des cookies</p>
            <p class="text-xs mt-1">
                Ce site utilise des cookies pour améliorer votre expérience. En continuant, vous acceptez notre
                <a href="#" class="text-blue-500 underline">politique de confidentialité</a>.
            </p>
        </div>
        <div class="ml-auto flex-shrink-0 flex gap-2">
            <button id="accept-cookies"
                class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md text-sm shadow">Accepter</button>
            <button id="decline-cookies"
                class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-md text-sm shadow">Refuser</button>
        </div>
    </div> --}}

    {{-- SCRIPTS --}}
    @include('layouts.inc.frontend.scripts')
</body>

</html>
