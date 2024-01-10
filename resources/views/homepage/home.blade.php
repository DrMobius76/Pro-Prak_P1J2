<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant Rocambolesque</title>
    @vite(['resources/scss/homepage.scss', 'resources/css/homepage.css'])
</head>
<body>
    <main>
        <div id="container">
            <img src="images/homepage/Restaurant-background.png" alt="Restaurant-background">
            <div id="textBox">
                <h2 class="centeredText" id="BrushFont">Restaurant Rocambolesque</h2>
                <p>Ontdek Restaurant Rocambolesque, opgericht door vrienden Usem Alaoui en Finn Pinneau. Geïnspireerd door Finns overgrootouders uit het noorden van Frankrijk, streven we naar eigentijdse gastronomie.</p>
                <p>Ons dynamische menu verandert met de seizoenen, met hoogwaardige ingrediënten voor verrassende gerechten. Bij speciale gelegenheden bieden we unieke arrangementen aan.</p>
                <p class="centeredText">Stap binnen en laat u verwennen door de unieke smaken van Rocambolesque.</p>
                <p class="centeredText" id="BrushFont">Welkom bij een culinair avontuur!</p>
            </div>
        </div>
    </main>
    @include('layouts.footer')
</body>