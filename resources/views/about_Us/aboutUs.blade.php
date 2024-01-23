<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About-us</title>
    @vite(['resources/css/aboutUs.css', 'resources/scss/aboutUs.scss'])
    @vite(['resources/css/general/footer.css', 'resources/scss/general/footer.scss'])
    @vite(['resources/css/navBar.css', 'resources/scss/navBar.scss'])
</head>

<body class="antialiased">
    <nav>
        <a href="{{route('homepage.view')}}" id="navImgLink"><img src="/images/algemeen/Rocambolesque-logo-DEF.png" alt="FotoRocambolesque" id="navImg"></a>
        <ul>
            <li><a href="{{route('homepage.view')}}">Home</a></li>
            <li><a href="{{route('menu.viewNonAdmin')}}">Menu</a></li>
            <li><a href="{{route('reservation.view')}}">Reserveringen</a></li>
            <li><a href="{{route('aboutUs')}}">Over ons</a></li>
            @if (Route::has('login'))
            @auth
            <li><a href="{{ url('/dashboard') }}" class="">Dashboard</a></li>
            @else
            <li><a href="{{ route('login') }}" class="">Log in</a></li>

            @if (Route::has('register'))
            <li><a href="{{ route('register') }}" class="">Registreren</a></li>
            @endif
            @endauth
            @endif
        </ul>
    </nav>
    <main>
        <div id="container">
            <div id="leftContainer">
                <h1 id="title">About us</h1>
                <article id="content">
                    <h2 class="contentTitle">Het restaurant</h2>
                    <p class="contentText">Welkom bij Restaurant Rocambolesque, waar gastronomie en avontuur samenkomen. Ons verhaal begint met twee vrienden, Usem Alaoui en Finn Pinneau, die hun passie voor de culinaire wereld bundelen en de droom van een eigen restaurant verwezenlijken. Met jarenlange ervaring in de horeca hebben ze besloten om de traditionele paden te verlaten en iets nieuws te creëren.</p>

                    <h2 class="contentTitle">Over de eigenaren</h2>
                    <p class="contentText">Usem, een ervaren kok met een verlangen naar vernieuwing, vond in Finn, afgestudeerd in restaurantmanagement, de perfecte partner om samen de uitdaging aan te gaan. Het was het moment voor Finn om zijn opgedane kennis in praktijk te brengen en voor Usem om de rol van souschef achter zich te laten en de titel van chef-kok te omarmen. Samen smeedden ze een partnerschap en gaven ze vorm aan de visie van een uniek culinair paradijs.</p>

                    <h2 class="contentTitle">Naam & Geschiedenis</h2>
                    <p class="contentText">De naam 'Rocambolesque' draagt een vleugje familiegeschiedenis met zich mee. Het betekent 'fantastisch' in het Frans en is een eerbetoon aan Finn's overgrootouders, die ooit een gelijknamig restaurant in het noorden van Frankrijk beheerden. Echter, in de geest van vernieuwing kozen Usem en Finn ervoor om een eigentijdse draai te geven aan de traditie. Bij Rocambolesque streven we ernaar om een levendige en eigentijdse sfeer te creëren, gecombineerd met een menu dat de diversiteit van seizoensgebonden gerechten van over de hele wereld weerspiegelt.</p>

                    <h2 class="contentTitle">Menu & ingrediënten</h2>
                    <p class="contentText">Onze keuken is een viering van smaken, waarbij we de hoogste kwaliteit ingrediënten gebruiken in vaste arrangementen en menu's die met de seizoenen veranderen. Bij speciale gelegenheden en feestdagen willen we onze gasten verrassen met unieke culinaire ervaringen, die net zo memorabel zijn als de gelegenheid zelf.</p>

                    <p class="contentText">Bij Restaurant Rocambolesque nodigen we u uit om deel uit te maken van ons verhaal, waar passie voor eten en gastvrijheid samenkomen. Stap binnen en laat ons uw smaakpapillen betoveren met een Rocambolesque ervaring die de verwachtingen overstijgt</p>
                </article>
            </div>

            <div id="verticalLineDivider"></div>

            <div id="rightContainer">
                <img src="images/about-us/restaurant.jpg" alt="Restaurant">
            </div>
        </div>
    </main>
    @include('layouts.footer')
</body>

</html>
