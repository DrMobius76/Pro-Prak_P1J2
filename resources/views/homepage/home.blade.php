<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- this loads the styling of the homepage -->
    @vite(['resources/scss/homepage.scss', 'resources/css/homepage.css'])


</head>

<body>
    <div>
        <div class="row">
            <div class="fronttext">
                <div class="header">
                    <div class="logo">
                        <div class="form-group">
                            <label for="Image"><a href="#"><img id="rocam-logo" src="/images/algemeen/Rocambolesque-logo-DEF.png" alt="Image"></a></label>
                            <div class="navbar">
                                <a href="#"><b>Menu</b></a>
                                <a href="#"><b>Make reservation</b></a>
                                <a href="#"><b>About us</b></a>
                            </div>
                            <div class="login">
                                <a href="#"><b>Login</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <!-- this is the container for the homepage title -->
        <div class="rocambolesque-text" id="homepage-title">
            <!-- title of the homepage -->
            <h1>Rocambolesque</h1>
        </div>
    </div>
    <!-- this is the container box for the information of the homepage -->
    <div class="homepageinfo" id="info-container">
        <div>
            <!-- this is the box for the information text -->
            <div class="block" id="info-box">
                <!-- in this element you can put the text for the information box -->
                <label for="text">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</label>
            </div>
        </div>
        <!-- this is the box for the img of the restaurant -->
        <div>
            <!-- this puts it next to the img element -->
            <label for="Image">
                <!-- this is the restaurants image -->
                <img id="restaurant-img" src="https://www.tasteofhome.com/wp-content/uploads/2020/04/Chilis-3.jpg?resize=1024%2C683" alt="Image">
            </label>
        </div>
    </div>
    <!-- puts the footer in this box -->
    <div>
        <!-- this includes the footer to the homepage -->
        @include('layouts.footer')
    </div>
</body>