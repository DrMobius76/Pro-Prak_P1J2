<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/menuCreateStyling.scss'])
</head>
<body>
    <form method="POST" action="{{ route('menu.store') }}">
        @csrf
        @method('POST')

        <label for="item_name">Item Name:</label>
        <input type="text" id="item_name" name="item_name">

        <label for="item_price">Item Price:</label>
        <input type="number" step="0.01" id="item_price" name="item_price">


        <label for="item_description">Item Description:</label>
        <input type="text" id="item_description" name="item_description">

        <label for="item_allergens">Item Allergens:</label>
        <input type="text" id="item_allergens" name="item_allergens">

        <input type="submit" value="Create">
    </form>
</body>
</html>
