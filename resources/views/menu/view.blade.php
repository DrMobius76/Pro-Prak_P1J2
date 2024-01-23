<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/scss/menuStyling.scss'])
    @vite(['resources/css/general/footer.css', 'resources/scss/general/footer.scss'])
    @vite(['resources/css/navBar.css', 'resources/scss/navBar.scss'])
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

    <main id="viewMenu">
        <div>

        </div>
        <h1>Menu Items:</h1>
        <table>
            <thead>
                <!-- this is a row in the table for tableheads with all the tableheads for the database -->
                <tr>
                    <!-- table head for item_name -->
                    <th>Item Name:</th>
                    <!-- table head for item_price -->
                    <th>Item Price:</th>
                    <!-- table head for item_description -->
                    <th>Item Description:</th>
                    <!-- table head for item_allergens -->
                    <th>Item Allergens:</th>
                </tr>
            </thead>
            <tbody>
                <!-- this foreach loops through every menu item and makes a new row per item -->
                @foreach($menuItems as $info)
                <tr>
                    <!-- table data for item_name -->
                    <td>{{$info->item_name}}</td>
                    <!-- table data for item_price -->
                    <td>{{$info->item_price}}</td>
                    <!-- table data for item_description -->
                    <td>{{$info->item_description}}</td>
                    <!-- table data for item_allergens -->
                    <td>{{$info->item_allergens}}</td>
                    <td>
                        <a href="{{route('menu.edit', ['info' => $info])}}">Edit</a>

                    </td>
                    <td>
                        <a href="{{route('menu.destroy', ['info' => $info])}}">verwijderen</a>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td>
                        <a href="{{route('menu.create')}}">voeg een gerecht toe</a>
                    </td>
                </tr>
        </table>
        </tbody>
    </main>

</body>

</html>
