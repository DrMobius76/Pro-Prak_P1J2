<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/scss/ReserveringenHomePage.scss'])
</head>

<img src="{{ asset('img/table-places.png') }}" alt="" id="FotoLayoutTafels">

<body>
    <main class="menuStyling">
        <form method="post" action="{{route('reservation.update', ['info' => $info])}}">
            @csrf
            @method('put')
            <div class="createStyling">
                <label for="days">Dag:</label>
                <input class="edit" type="text" name="days" placeholder="dagen" value="{{$info->days}}">
            </div>
            <div class="createStyling">
                <label for="date">Datum:</label>
                <input class="edit" type="text" name="date" placeholder="datum" value="{{$info->date}}">
            </div>
            <div class="createStyling">
                <label for="time">Tijd:</label>
                <input class="edit" type="text" name="time" placeholder="tijd" value="{{$info->time}}">
            </div>
            <div class="createStyling">
                <label for="table">Tafel:</label>
                <input class="edit" type="text" name="table" placeholder="tafel" value="{{$info->table}}">
            </div>
            <div class="createStyling">
                <label for="child_chairs">Kinderstoelen:</label>
                <input class="edit" type="text" name="child_chairs" placeholder="kinderstoelen" value="{{$info->child_chairs}}">
            </div>
            <div class="createStyling">
                <input type="submit" value="Update">
            </div>
        </form>
    </main>
</body>

</html>