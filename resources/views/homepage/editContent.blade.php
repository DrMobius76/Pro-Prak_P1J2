<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verander homepage</title>
</head>
<body>
    <form method="post" action="{{route('homepage.updateContent')}}">
        @csrf
        @method('put')

        @foreach ($content as $element)

        <label for="header">Header:</label>
            <textarea name="header" id="header" cols="30" rows="10">{{$element->header}}</textarea>
        <label for="pElement1">Paragraaf 1</label>
            <textarea name="pElement1" id="pElement1" cols="30" rows="10">{{$element->pElement1}}</textarea>
        <label for="pElement2">Paragraaf 2</label>
            <textarea name="pElement2" id="pElement1" cols="30" rows="10">{{$element->pElement2}}</textarea>
        <label for="pElement3">Paragraaf 3</label>
            <textarea name="pElement3" id="pElement1" cols="30" rows="10">{{$element->pElement3}}</textarea>
        <label for="pElement4">Paragraaf 4</label>
            <textarea name="pElement4" id="pElement1" cols="30" rows="10">{{$element->pElement4}}</textarea>
        <input type="submit" value="Submit">
        @endforeach
    </form>
</body>
</html>