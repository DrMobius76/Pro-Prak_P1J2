<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/scss/menu/menu.scss', 'resources/css/menu/menu.css'])

</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <div class="fronttext">
                    <div class="header">
                        <div class="logo">
                            <div class="form-group">
                                <label for="Image"><a href="./Homepage.php"><img id="rocam-logo" src="/images/algemeen/Rocambolesque-logo-DEF.png" alt="Image"></a></label>
                                <div class="navbar">
                                    <a href="./menu"><b>Menu</b></a>
                                    <a href="./Homepage.php"><b>Make reservation</b></a>
                                    <a href="./Homepage.php"><b>About us</b></a>
                                </div>
                                <div class="login">
                                    <a href="./Homepage.php"><b>Login</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <div class="fronttext">
                    <div class="form-group">
                        <div class="rocambolesque-text">
                            <h1><b>Rocambolesque</b></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="homepageinfo">
        <div class="blockrow">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-6">
                        <div class="block">
                            <div class="form-group">
                                <!-- @foreach($voorgerechts as $voorgerechts)
                                <tr>
                                    <td>{{$voorgerechts->name}}</td> -->
                                <label for="text">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</label>
                                <label for="text">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</label>
                                <!-- </tr> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-6">
                        <div class="block">
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
                        <div class="block">
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
                        <div class="block">
                            <div class="form-group">
                                <label for="text">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</label>
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
                <div class="linkimages">
                    <div class="form-group">
                        <label for="Image"><a href="./Homepage.php"><img id="twitter-image" src="/images/algemeen/Twitter-logo.png" alt="Image"></a></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <div class="linkimages">
                    <div class="form-group">
                        <label for="Image"><a href="./Homepage.php"><img id="instagram-image" src="images/algemeen/instagram.png" alt="Image"></a></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>