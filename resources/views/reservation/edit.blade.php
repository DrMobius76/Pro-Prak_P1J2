<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="{{route('reservation.view', ['info' => $info])}}">
        @csrf
        @method('put')
        <div>
            <label for="days">Dag:</label>
            <input class="edit" type="text" name="days" placeholder="dagen" value="{{$info->days}}">
        </div>
        <div>
            <label for="date">Datum:</label>
            <input class="edit" type="text" name="date" placeholder="datum" value="{{$info->date}}">
        </div>
        <div>
            <label for="time">Tijd:</label>
            <input class="edit" type="text" name="time" placeholder="tijd" value="{{$info->time}}">
        </div>
        <div>
            <label for="table">Tafel:</label>
            <input class="edit" type="text" name="table" placeholder="tafel" value="{{$info->table}}">
        </div>
        <div>
            <label for="child_chairs">Kinderstoelen:</label>
            <input class="edit" type="text" name="child_chairs" placeholder="kinderstoelen" value="{{$info->child_chairs}}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>

</html>