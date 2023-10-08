<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="{{route('reservation.create')}}">maak een reservering</a>
    <table border="1">
        <thead>
            <tr>
                <th>Days:</th>
                <th>Date:</th>
                <th>Time:</th>
                <th>Table:</th>
                <th>Child Chairs:</th>
                <th>Update:</th>
                <th>Delete:</th>
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
</body>

</html>