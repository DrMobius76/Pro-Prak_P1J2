<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    //* when the form is send the user gets send to the name of the route where the user needs to go to
    <form method="post" action="{{route('reservation.store')}}">
        //* this is security for laravel it checks if the user is the actually person that makes a request
        @csrf
        //* sends the form as in a post method
        @method('post')
        <div>//* this div is for the day fields
            <label for="days">dag:</label>
            <input class="edit" type="text" name="days" placeholder="dagen">
        </div>
        <div>//* this div is for the date fields
            <label for="date">Datum:</label>
            <input class="edit" type="date" name="date" placeholder="datum">
        </div>
        <div>//* this is for the time fields on the page
            <label for="time">Tijd:</label>
            <input class="edit" type="text" name="time" placeholder="tijd">
        </div>
        <div>//* this is for the table fields for on the page
            <label for="table">Tafel:</label>
            <input class="edit" type="text" name="table" placeholder="tafel">
        </div>
        <div>//* this is for the child_chairs field on the page
            <label for="child_chairs">Kinderstoelen:</label>
            <input class="edit" type="text" name="child_chairs" placeholder="kinderstoelen">
        </div>
        <div>//* when the users clicks on this input button then the form gets send
            <input type="submit" value="opslaan">
        </div>
    </form>
</body>

</html>