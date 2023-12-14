<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('aboutUs.storeContent')}}" method="post">
        @csrf
        <input type="text" name="header" placeholder="kop tekst">
        <textarea name="content" placeholder="inhoud" rows="1" cols="20"></textarea>
        <input type="submit" value="submit">
    </form>
</body>

</html>