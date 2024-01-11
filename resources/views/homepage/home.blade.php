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