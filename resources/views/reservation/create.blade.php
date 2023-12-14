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
    <!-- when the form is send the user gets send to the name of the route where the user needs to go to -->
    <form method="post" action="{{route('reservation.store')}}">
        <!-- this is security for laravel it checks if the user is the actually person that makes a request -->
        @csrf
        <!-- sends the form as in a post method -->
        @method('post')
        <!-- this div is for the day fields -->
        <div>
            <label for="days">dag:</label>
            <input class="edit" type="text" name="days" placeholder="dagen">
        </div>
        <!-- this div is for the date fields -->
        <div>
            <label for="date">Datum:</label>
            <input class="edit" type="date" name="date" placeholder="datum">
        </div>
        <!-- this is for the time fields on the page -->
        <div>
            <label for="time">Tijd:</label>
            <input class="edit" type="text" name="time" placeholder="tijd">
        </div>
        <!-- this is for the table fields for on the page -->
        <div>
            <label for="table">Tafel:</label>
            <input class="edit" type="text" name="table" placeholder="tafel">
        </div>
        <!-- this is for the child_chairs field on the page -->
        <div>
            <label for="child_chairs">Kinderstoelen:</label>
            <input class="edit" type="text" name="child_chairs" placeholder="kinderstoelen">
        </div>
        <!-- this is for the amount of people coming field on the page -->
        <div>
            <label for="people">Aantal mensen:</label>
            <input class="edit" type="number" name="people" placeholder="aantal mensen">
        </div>
        <!-- when the users clicks on this input button then the form gets send -->
        <div>
            <input type="submit" value="opslaan">
        </div>
    </form>
</body>

</html>