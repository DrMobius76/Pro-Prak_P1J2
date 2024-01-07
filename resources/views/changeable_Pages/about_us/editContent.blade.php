<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- form for the title and image -->
    <form action="{{route('aboutUs.updateContent', ['info' => $info, $info])}}" method="post">
        <!-- this is security for laravel it checks if the user is the actually person that makes a request -->
        @csrf
        <!-- sends the form as in a put method so it updates the information -->
        @method('put')
        <!-- this is for the header -->
        <input type="text" name="header" placeholder="kop tekst" value="{{$info->header}}">
        <!-- this is for the content -->
        <textarea name="content" placeholder="inhoud" rows="5" cols="100">{{$info->content}}</textarea>
        <!-- this is a hidden id so the backend can check with the database -->
        <input type="text" name="id" value="{{$info->id}}" hidden>
        <!-- this is the submit button -->
        <input type="submit" value="submit">
    </form>
</body>

</html>