<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('aboutUs.store')}}" method="post">
        @csrf
        <input type="text" name="title" placeholder="titel">
        <select name="image" id="">
            <option value="Restaurant.jpg" name="image">Restaurant.jpg</option>
            <option value="restaurant-england.png" name="image">restaurant-england.png</option>
        </select>
        <input type="submit" value="submit">
    </form>
</body>

</html>