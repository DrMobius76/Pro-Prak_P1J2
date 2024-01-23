<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/scss/ReserveringenHomePage.scss', 'resources/scss/homepage.scss', 'resources/scss/ReserveringCreate.scss'])
    @vite(['resources/scss/navBar.scss', 'resources/css/navBar.css'])
</head>

<body>

    <nav>
        <a href="{{route('homepage.view')}}" id="navImgLink"><img src="/images/algemeen/Rocambolesque-logo-DEF.png" alt="FotoRocambolesque" id="navImg"></a>
        <ul>
            <li><a href="{{route('homepage.view')}}">Home</a></li>
            <li><a href="">Menu</a></li>
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
        <form method="post" action="{{route('reservation.store')}}">
            @csrf
            @method('post')
            <div>
                <label for="days">Dag:</label>
                <input class="edit" type="text" name="days" placeholder="Dagen">
            </div>
            <div>
                <label for="date">Datum:</label>
                <input class="edit" type="date" name="date" placeholder="Datum">
            </div>
            <div>
                <label for="time">Tijd:</label>
                <input class="edit" type="time" name="time" placeholder="Tijd">
            </div>
            <div>
                <label for="table">Tafel:</label>
                <input class="edit" type="number" name="table" placeholder="Tafel">
            </div>
            <div>
                <label for="child_chairs">Kinderstoelen:</label>
                <input class="edit" type="number" name="child_chairs" placeholder="Kinderstoelen">
            </div>
            <div>
                <label for="people">Aantal mensen:</label>
                <input class="edit" type="number" name="people" placeholder="Aantal mensen">
            </div>
            <div>
                <input type="submit" value="Opslaan">
            </div>
        </form>
    </main>
    @include('layouts.footer')
</body>

</html>