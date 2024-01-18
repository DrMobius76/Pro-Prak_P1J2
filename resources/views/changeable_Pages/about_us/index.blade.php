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
                <!-- loops through all the title and image data and put it on the page -->
                @foreach($mainInfo as $info)
                <!-- puts the title data from the database on the page -->
                <h1 id="title">{{$info->title}}</h1>
                <!-- makes a edit link for the title and image -->
                <a href="{{route('aboutUs.edit', ['info' => $info])}}">edit content</a>
                <!-- makes a delete link for every title and image -->
                <a href="{{route('aboutUs.delete', ['info' => $info])}}">delete content</a>
                @endforeach
                <!-- makes a create link -->
                <a href="{{route('aboutUs.create')}}">create content</a>
                <article id="content">
                    <!-- for every header and content makes these elements with data -->
                    @foreach($contentInfo as $info)
                    <!-- makes a edit link for every header and content -->
                    <a href="{{route('aboutUs.editContent', ['info' => $info])}}">edit content</a>
                    <!-- makes a delete link for every header and content -->
                    <a href="{{route('aboutUs.deleteContent', ['info' => $info])}}">delete content</a>
                    <!-- here comes the data for the header -->
                    <h2 class="contentTitle">{{$info->header}}</h2>
                    <!-- here comes the data for the content -->
                    <p class="contentText">{{$info->content}}</p>
                    @endforeach
                </article>
            </div>

            <div id="verticalLineDivider"></div>

            <div id="rightContainer">
                <!-- for every image makes this element with the data -->
                @foreach($mainInfo as $info)
                <!-- image element with the data from the database -->
                <img src="/images/about-us/{{$info->image}}" alt="Restaurant">
                @endforeach
            </div>
        </div>
    </main>
    @include('layouts.footer')
</body>

</html>