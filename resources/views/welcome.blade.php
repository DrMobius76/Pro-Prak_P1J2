<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/scss/app.scss' , 'resources/js/app.js'])
    </head>
    <body class="antialiased">
       <div id="nav">
           <img id="logo" src="img/logo.svg" alt="Logo">
            <ul>
                <li><a href="">Homepage</a></li>
                <li><a href="">Menu</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Login/Register</a></li>
            </ul>
       </div>
       <!-- <div id="content"></div> -->
       <main>
            <h1></h1>
            <article></article>
       </main>
    </body>
</html>
