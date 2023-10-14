<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- sends the user to the name of the route for the page they need to go to with the information from the database -->
    <form method="post" action="{{route('reservation.update', ['info' => $info])}}">
        <!-- this is security for laravel it checks if the user is the actually person that makes a request -->
        @csrf
        <!-- sends the form as in a put method so it updates the information -->
        @method('put')
        <!-- this div is for the days field -->
        <div>
            <label for="days">Dag:</label>
            <input class="edit" type="text" name="days" placeholder="dagen" value="{{$info->days}}">
        </div>
        <!-- this div is for the date fields -->
        <div>
            <label for="date">Datum:</label>
            <input class="edit" type="date" name="date" placeholder="datum" value="{{$info->date}}">
        </div>
        <!-- this is for the time input -->
        <div>
            <label for="time">Tijd:</label>
            <input class="edit" type="text" name="time" placeholder="tijd" value="{{$info->time}}">
        </div>
        <!-- this is for the table columns -->
        <div>
            <label for="table">Tafel:</label>
            <input class="edit" type="text" name="table" placeholder="tafel" value="{{$info->table}}">
        </div>
        <!-- this is for the child_chairs -->
        <div>
            <label for="child_chairs">Kinderstoelen:</label>
            <input class="edit" type="text" name="child_chairs" placeholder="kinderstoelen" value="{{$info->child_chairs}}">
        </div>
        <!-- this is for the amount of people coming -->
        <div>
            <label for="people">Aantal mensen:</label>
            <input class="edit" type="number" name="people" placeholder="aantal mensen" value="{{$info->people}}">
        </div>
        <!-- when the users clicks on this input button the form is going to send the data -->
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>

</html>