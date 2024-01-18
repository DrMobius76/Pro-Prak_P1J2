<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- form for the title and image -->
    <form action="{{route('aboutUs.update')}}" method="post">
        <!-- this is security for laravel it checks if the user is the actually person that makes a request -->
        @csrf
        <!-- sends the form as in a put method so it updates the information -->
        @method('put')
        <!-- this is for the title -->
        <input type="text" name="title" placeholder="titel" value="{{$mainInfo[0]->title}}">
        <!-- this is for the image -->
        <select name="image" id="">
            <!-- these are options for every image you can chose -->
            <option value="Restaurant.jpg" name="image">Restaurant.jpg</option>
            <option value="restaurant-england.png" name="image">restaurant-england.png</option>
        </select>
        <!-- this is for the header1 -->
        <input type="text" name="header1" placeholder="kop tekst" value="{{$mainInfo[0]->header1}}">
        <!-- this is for the content1 -->
        <textarea name="content1" placeholder="inhoud" rows="5" cols="100">{{$mainInfo[0]->content1}}</textarea>
        <!-- this is for the header2 -->
        <input type="text" name="header2" placeholder="kop tekst" value="{{$mainInfo[0]->header2}}">
        <!-- this is for the content2 -->
        <textarea name="content2" placeholder="inhoud" rows="5" cols="100">{{$mainInfo[0]->content2}}</textarea>
        <!-- this is for the header3 -->
        <input type="text" name="header3" placeholder="kop tekst" value="{{$mainInfo[0]->header3}}">
        <!-- this is for the content3 -->
        <textarea name="content3" placeholder="inhoud" rows="5" cols="100">{{$mainInfo[0]->content3}}</textarea>
        <!-- this is for the header4 -->
        <input type="text" name="header4" placeholder="kop tekst" value="{{$mainInfo[0]->header4}}">
        <!-- this is for the content4 -->
        <textarea name="content4" placeholder="inhoud" rows="5" cols="100">{{$mainInfo[0]->content4}}</textarea>
        <!-- submit button -->
        <input type="submit" value="submit">
    </form>
</body>

</html>