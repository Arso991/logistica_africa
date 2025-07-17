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

    @include('layouts.inc.styles')
</head>

<body class="app ltr landing-page horizontal">

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            {{-- HEADER --}}
            @include('layouts.inc.header')

            <!--app-content open-->
            <div class="main-content mt-0">
                @yield('content')
            </div>
            <!--app-content closed-->
        </div>

        {{-- FOOTER --}}
        @include('layouts.inc.footer')

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    {{-- SCRIPTS --}}
    @include('layouts.inc.scripts')
</body>

</html>
