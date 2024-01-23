<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant Rocambolesque</title>
    @vite(['resources/scss/homepage.scss', 'resources/css/homepage.css'])
    @vite(['resources/scss/navBar.scss', 'resources/css/navBar.css'])
</head>

<body>
    <nav>
        <a href="{{route('homepage.view')}}" id="navImgLink"><img src="/images/algemeen/Rocambolesque-logo-DEF.png" alt="FotoRocambolesque" id="navImg"></a>
        <ul>
            <li><a href="{{route('homepage.view')}}">Home</a></li>
            <li><a href="{{route('menu.viewNonAdmin')}}">Menu</a></li>
            <li><a href="">Reserveringen</a></li>
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
            <img src="images/homepage/Restaurant-background.png" alt="Restaurant-background">
            <div id="textBox">
                @foreach ($content as $element)
                <h2 class="centeredText" id="BrushFont">{{$element->header}}</h2>
                <p>{{$element->pElement1}}</p>
                <p>{{$element->pElement2}}</p>
                <p class="centeredText">{{$element->pElement3}}</p>
                <p class="centeredText" id="BrushFont">{{$element->pElement4}}</p>
                @endforeach
            </div>
        </div>
    </main>
    @include('layouts.footer')
</body>
