<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verander about us</title>
    @vite(['resources/scss/editContentAboutUs.scss', 'resources/css/editContentAboutUs.css'])
    @vite(['resources/scss/navBar.scss', 'resources/css/navBar.css'])
</head>

<body>
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
        <div class="container">
            <!-- form for the title and image -->
            <form action="{{route('aboutUs.update')}}" method="post">
                <!-- this is security for laravel it checks if the user is the actually person that makes a request -->
                @csrf
                <!-- sends the form as in a put method so it updates the information -->
                @method('put')
                <div class="inputContainer">
                    <!-- gives the title a name -->
                    <label for="title">Titel:</label>
                    <!-- this is for the title -->
                    <input type="text" name="title" placeholder="titel" value="{{$mainInfo[0]->title}}">
                    <!-- give the selection a name -->
                    <label for="image">Plaatje:</label>
                    <!-- this is for the image -->
                    <select name="image">
                        <!-- these are options for every image you can chose -->
                        <option value="Restaurant.jpg" name="image">Restaurant.jpg</option>
                        <option value="restaurant-england.png" name="image">restaurant-england.png</option>
                    </select>
                </div>
                <div class="inputContainer">
                    <!-- this is for the input so it has a name -->
                    <label for="header1">Koptekst 1:</label>
                    <!-- this is for the header1 -->
                    <input type="text" name="header1" placeholder="kop tekst" value="{{$mainInfo[0]->header1}}">
                    <!-- this is for the textarea so it has a name -->
                    <label for="content1">Inhoud 1:</label>
                    <!-- this is for the content1 -->
                    <textarea name="content1" placeholder="inhoud" rows="6" cols="100">{{$mainInfo[0]->content1}}</textarea>
                </div>
                <div class="inputContainer">
                    <!-- this is for the input so it has a name -->
                    <label for="header2">Koptekst 2:</label>
                    <!-- this is for the header2 -->
                    <input type="text" name="header2" placeholder="kop tekst" value="{{$mainInfo[0]->header2}}">
                    <!-- this is for the textarea so it has a name -->
                    <label for="content2">Inhoud 2:</label>
                    <!-- this is for the content2 -->
                    <textarea name="content2" placeholder="inhoud" rows="6" cols="100">{{$mainInfo[0]->content2}}</textarea>
                </div>
                <div class="inputContainer">
                    <!-- this is for the input so it has a name -->
                    <label for="header3">Koptekst 3:</label>
                    <!-- this is for the header3 -->
                    <input type="text" name="header3" placeholder="kop tekst" value="{{$mainInfo[0]->header3}}">
                    <!-- this is for the textarea so it has a name -->
                    <label for="content3">Inhoud 3:</label>
                    <!-- this is for the content3 -->
                    <textarea name="content3" placeholder="inhoud" rows="6" cols="100">{{$mainInfo[0]->content3}}</textarea>
                </div>
                <div class="inputContainer">
                    <!-- this is for the input so it has a name -->
                    <label for="header4">Koptekst 4:</label>
                    <!-- this is for the header4 -->
                    <input type="text" name="header4" placeholder="kop tekst" value="{{$mainInfo[0]->header4}}">
                    <!-- this is for the textarea so it has a name -->
                    <label for="content4">Inhoud 4:</label>
                    <!-- this is for the content4 -->
                    <textarea name="content4" placeholder="inhoud" rows="6" cols="100">{{$mainInfo[0]->content4}}</textarea>
                </div>
                <!-- submit button -->
                <input type="submit" class="submit" value="submit">
            </form>
    </main>
    @include('layouts.footer')
</body>

</html>