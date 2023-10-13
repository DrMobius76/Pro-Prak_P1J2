<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>//* this is a link to the create page so you can make a reservation, it calls out to the name of the route
    <a href="{{route('reservation.create')}}">maak een reservering</a>
    //* gives the table a basic line styling
    <table border="1">
        <thead>
            //* this is een row in the table for tableheads with all the tableheads for the database
            <tr>
                //* table head for days
                <th>Dagen:</th>
                //* table head for the date
                <th>Datums:</th>
                //* table head for the time
                <th>Tijden:</th>
                //* table head for the table column $information
                <th>Tafels:</th>
                //* for the child_chairs column
                <th>Kinderstoelen:</th>
                //* this is the table head for the admin that he/she can edit the reservation
                <th>Wijzigen:</th>
                //* this is the table head for the admin so they can delete a reservation
                <th>Verwijderen:</th>
            </tr>
        </thead>
        <tbody>
            //* this foreach loops through every reservation and makes a new row per reservation
            //* and puts the reservation information in the $info
            @foreach($information as $info)
            <tr>
                //* loads per reservation days information
                <td>{{$info->days}}</td>
                //* loads per reservation the date information
                <td>{{$info->date}}</td>
                //* loads per reservation the time information
                <td>{{$info->time}}</td>
                //* loads per reservation the information for the table column
                <td>{{$info->table}}</td>
                //* loads the information for the child_chairs
                <td>{{$info->child_chairs}}</td>
                <td>//* this is a link to the edit page with all the reservation information send to the other page as well
                    <a href="{{route('reservation.edit', ['info' => $info])}}">wijzigen</a>
                </td>
                <td>//* this is a link to the delete route with the information of the reservation you click on
                    <a href="{{route('reservation.delete', ['info' => $info])}}">verwijderen</a>
                </td>
            </tr>
            //* this ends the @foreach
            @endforeach
        </tbody>
    </table>
</body>

</html>