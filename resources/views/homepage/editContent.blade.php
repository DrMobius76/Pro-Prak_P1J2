<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verander homepage</title>
    @vite(['resources/scss/editContentHomepage.scss', 'resources/css/editContentHomepage.css'])
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
            <form method="post" action="{{route('homepage.updateContent')}}">
                @csrf
                @method('put')

                @foreach ($content as $element)

                <div class="inputContainer">
                    <label for="header">Header:</label>
                    <textarea name="header" id="header" cols="30" rows="10">{{$element->header}}</textarea>
                </div>
                <div class="inputContainer">
                    <label for="pElement1">Alinea 1</label>
                    <textarea name="pElement1" id="pElement1" cols="30" rows="10">{{$element->pElement1}}</textarea>
                </div>
                <div class="inputContainer">
                    <label for="pElement2">Alinea 2</label>
                    <textarea name="pElement2" id="pElement1" cols="30" rows="10">{{$element->pElement2}}</textarea>
                </div>
                <div class="inputContainer">
                    <label for="pElement3">Alinea 3</label>
                    <textarea name="pElement3" id="pElement1" cols="30" rows="10">{{$element->pElement3}}</textarea>
                </div>
                <div class="inputContainer">
                    <label for="pElement4">Alinea 4</label>
                    <textarea name="pElement4" id="pElement1" cols="30" rows="10">{{$element->pElement4}}</textarea>
                </div>
                <input type="submit" value="Submit" id="submit">
                @endforeach
            </form>
        </div>
    </main>
    @include('layouts.footer')
</body>

</html>
