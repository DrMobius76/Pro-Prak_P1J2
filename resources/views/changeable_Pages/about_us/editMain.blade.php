<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- form for the title and image -->
    <form action="{{route('aboutUs.update', ['info' => $info])}}" method="post">
        <!-- this is security for laravel it checks if the user is the actually person that makes a request -->
        @csrf
        <!-- sends the form as in a put method so it updates the information -->
        @method('put')
        <!-- this is for the title -->
        <input type="text" name="title" placeholder="titel" value="{{$info->title}}">
        <!-- this is for the image -->
        <select name="image" id="">
            <!-- these are options for every image you can chose -->
            <option value="Restaurant.jpg" name="image">Restaurant.jpg</option>
            <option value="restaurant-england.png" name="image">restaurant-england.png</option>
        </select>
        <!-- submit button -->
        <input type="submit" value="submit">
    </form>
</body>

</html>