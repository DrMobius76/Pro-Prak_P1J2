<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/scss/homepage.scss', 'resources/css/homepage.css'])


</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
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
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <div class="fronttext">
                    <div class="form-group">
                        <div class="rocambolesque-text" id="homepage-title">
                            <h1>Rocambolesque</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="homepageinfo" id="info-container">
        <div class="container mt-5">
            <div class="row">
                <div class="col-6">
                    <div class="block" id="info-box">
                        <div class="form-group">
                            <label for="text">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-6">
                    <div class="image">
                        <div class="form-group">
                            <label for="Image"><img id="restaurant-img" src="https://www.tasteofhome.com/wp-content/uploads/2020/04/Chilis-3.jpg?resize=1024%2C683" alt="Image"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>
