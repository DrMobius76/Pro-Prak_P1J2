<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/scss/menuEditStyling.scss'])
</head>

<body>
    <!-- sends the user to the name of the route for the page they need to go to with the information from the database -->
    <form method="post" action="{{route('menu.update', ['info' => $info])}}">
        <!-- this is security for laravel it checks if the user is the actually person that makes a request -->
        @csrf
        <!-- sends the form as in a put method so it updates the information -->
        @method('put')
        <!-- this div is for the item_name field -->
        <div>
            <label for="item_name">Item Name:</label>
            <input class="edit" type="text" name="item_name" placeholder="Item Name" value="{{$info->item_name}}">
        </div>
        <!-- this div is for the item_price field -->
        <div>
            <label for="item_price">Item Price:</label>
            <input class="edit" type="number" step="0.01" name="item_price" placeholder="Item Price" value="{{$info->item_price}}">
        </div>
        <!-- this div is for the item_description field -->
        <div>
            <label for="item_description">Item Description:</label>
            <input class="edit" type="text" name="item_description" placeholder="Item Description" value="{{$info->item_description}}">
        </div>
        <!-- this div is for the item_allergens field -->
        <div>
            <label for="item_allergens">Item Allergens:</label>
            <input class="edit" type="text" name="item_allergens" placeholder="Item Allergens" value="{{$info->item_allergens}}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>

</html>
