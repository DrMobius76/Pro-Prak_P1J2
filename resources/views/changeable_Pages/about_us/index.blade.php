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
            <li><a href="">Menu</a></li>
            <li><a href="">Reserveringen</a></li>
            <li><a href="{{route('aboutUs.index')}}">Over ons</a></li>
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
                <!-- puts the title data from the database on the page -->
                <h1 id="title">{{$mainInfo[0]->title}}</h1>
                <article id="content">
                    <!-- here comes the data for the header -->
                    <h2 class="contentTitle">{{$mainInfo[0]->header1}}</h2>
                    <!-- here comes the data for the content -->
                    <p class="contentText">{{$mainInfo[0]->content1}}</p>
                    <!-- here comes the data for the header -->
                    <h2 class="contentTitle">{{$mainInfo[0]->header2}}</h2>
                    <!-- here comes the data for the content -->
                    <p class="contentText">{{$mainInfo[0]->content2}}</p>
                    <!-- here comes the data for the header -->
                    <h2 class="contentTitle">{{$mainInfo[0]->header3}}</h2>
                    <!-- here comes the data for the content -->
                    <p class="contentText">{{$mainInfo[0]->content3}}</p>
                    <!-- here comes the data for the header -->
                    <h2 class="contentTitle">{{$mainInfo[0]->header4}}</h2>
                    <!-- here comes the data for the content -->
                    <p class="contentText">{{$mainInfo[0]->content4}}</p>
                </article>
            </div>

            <div id="verticalLineDivider"></div>

            <div id="rightContainer">
                <!-- image element with the data from the database -->
                <img src="/images/about-us/{{$mainInfo[0]->image}}" alt="Restaurant">
            </div>
        </div>
    </main>
    @include('layouts.footer')
</body>

</html>