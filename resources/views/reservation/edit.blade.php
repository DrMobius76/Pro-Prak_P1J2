<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>//* sends the user to the name of the route for the page they need to go to with the information from the database
    <form method="post" action="{{route('reservation.update', ['info' => $info])}}">
        //* this is security for laravel it checks if the user is the actually person that makes a request
        @csrf
        //* sends the form as in a put method so it updates the information
        @method('put')
        <div>//* this div is for the days field
            <label for="days">Dag:</label>
            <input class="edit" type="text" name="days" placeholder="dagen" value="{{$info->days}}">
        </div>
        <div>//* this div is for the date fields
            <label for="date">Datum:</label>
            <input class="edit" type="date" name="date" placeholder="datum" value="{{$info->date}}">
        </div>
        <div>//* this is for the time input
            <label for="time">Tijd:</label>
            <input class="edit" type="text" name="time" placeholder="tijd" value="{{$info->time}}">
        </div>
        <div>//* this is for the table columns
            <label for="table">Tafel:</label>
            <input class="edit" type="text" name="table" placeholder="tafel" value="{{$info->table}}">
        </div>
        <div>//* this is for the child_chairs
            <label for="child_chairs">Kinderstoelen:</label>
            <input class="edit" type="text" name="child_chairs" placeholder="kinderstoelen" value="{{$info->child_chairs}}">
        </div>
        <div>//* when the users clicks on this input button the form is going to send the data
            <input type="submit" value="Update">
        </div>
    </form>
</body>

</html>