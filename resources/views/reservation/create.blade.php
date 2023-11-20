<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/scss/ReserveringenHomePage.scss'])
    <style>

    </style>
</head>

<body>
    <div id="container">
        <img src="{{ asset('img/table-places.png') }}" alt="" id="FotoLayoutTafels">
        <h1 id="TableHeader">Reservering:</h1>
        <main class="menuStyling">
            <form method="post" action="{{route('reservation.store')}}">
                @csrf
                @method('post')

                <div>
                    <div class="createStyling">
                        <label for="days">Dag:</label>
                        <input class="edit" type="text" name="days" placeholder="dagen">
                    </div>
                    <div class="createStyling">
                        <label for="date">Datum:</label>
                        <input class="edit" type="date" name="date" placeholder="datum -> 2023-01-01" min="2023-11-15">
                    </div>
                    <div class="createStyling">
                        <label for="time">Tijd:</label>
                        <input class="edit" type="time" name="time" placeholder="tijd" min="17:00" max="21:00">
                    </div>
                    <div class="createStyling">
                        <label for="table">Tafel:</label>
                        <input class="edit" type="number" name="table" placeholder="tafel" min="1" max="8">
                    </div>
                    <div class="createStyling">
                        <label for="child_chairs">Kinderstoelen:</label>
                        <input class="edit" type="number" name="child_chairs" placeholder="kinderstoelen" min="0" max="2">
                    </div>
                    <div>
                        <input type="submit" value="opslaan">
                    </div>
            </form>
    </div>

    </main>
</body>

</html>