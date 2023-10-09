<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="{{route('reservation.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="days">dag:</label>
            <input class="edit" type="text" name="days" placeholder="dagen">
        </div>
        <div>
            <label for="date">Datum:</label>
            <input class="edit" type="date" name="date" placeholder="datum">
        </div>
        <div>
            <label for="time">Tijd:</label>
            <input class="edit" type="text" name="time" placeholder="tijd">
        </div>
        <div>
            <label for="table">Tafel:</label>
            <input class="edit" type="text" name="table" placeholder="tafel">
        </div>
        <div>
            <label for="child_chairs">Kinderstoelen:</label>
            <input class="edit" type="text" name="child_chairs" placeholder="kinderstoelen">
        </div>
        <div>
            <input type="submit" value="opslaan">
        </div>
    </form>
</body>

</html>