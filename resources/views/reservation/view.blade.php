<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/scss/ReserveringenHomePage.scss', 'resources/scss/homepage.scss' ])

    <style>

    </style>
</head>

<body>
    <nav>
        <img src="/images/algemeen/Rocambolesque-logo-DEF.png" alt="FotoRocambolesque" id="navImg">
        <ul>
            <li><a href="/resources/views/home_page/home.blade.php">Home</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Menu</a></li>
            <li><a href="">Inloggen</a></li>
            </ul>
    </nav>
    <img src="/images/algemeen/reservationBackground.jpeg" alt="achtergrond" id="reserveringBackgroundImage">
    <main id="viewMenu">
        <div>

        </div>
        <h1>Reserveringen:</h1>
        <table>
            <thead>
                <tr>
                    <th>Dagen:</th>
                    <th>Datums:</th>
                    <th>Tijden:</th>
                    <th>Tafels:</th>
                    <th>Kinderstoelen:</th>
                    <th>Wijzigen:</th>
                    <th>Verwijderen:</th>
                </tr>
            </thead>
            <tbody>
                @foreach($information as $info)
                <tr>
                    <td>{{$info->days}}</td>
                    <td>{{$info->date}}</td>
                    <td>{{$info->time}}</td>
                    <td>{{$info->table}}</td>
                    <td>{{$info->child_chairs}}</td>
                    <td>
                        <a href="{{route('reservation.edit', ['info' => $info])}}">wijzigen</a>
                    </td>
                    <td>
                        <a href="{{route('reservation.delete', ['info' => $info])}}">verwijderen</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('reservation.create')}}">maak een reservering</a>
    </main>

</body>

</html>