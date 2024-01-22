<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/scss/ReserveringenHomePage.scss', 'resources/scss/homepage.scss', 'resources/scss/ReserveringCreate.scss'])
    
</head>

<body>
    
<nav>
        <img src="/images/algemeen/Rocambolesque-logo-DEF.png" alt="FotoRocambolesque" id="navImg">
        <ul>
            <li><a href="{{route('homepage')}}">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Menu</a></li>
            @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 no-underline">
            @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 no-underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 no-underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 no-underline">Register</a>
            @endif
            @endauth
        </div>
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
</body>

</html>
