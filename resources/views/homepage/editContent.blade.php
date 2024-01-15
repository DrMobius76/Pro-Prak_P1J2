<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verander homepage</title>
    @vite(['resources/scss/editContentHomepage.scss', 'resources/css/editContentHomepage.css'])
</head>

<body>
    <main>
        <div id="container">
            <form method="post" action="{{route('homepage.updateContent')}}">
                @csrf
                @method('put')

                @foreach ($content as $element)

                <div class="inputContainer">
                    <label for="header">Header:</label>
                    <textarea name="header" id="header" cols="30" rows="10">{{$element->header}}</textarea>
                </div>
                <div class="inputContainer">
                    <label for="pElement1">Alinea 1</label>
                    <textarea name="pElement1" id="pElement1" cols="30" rows="10">{{$element->pElement1}}</textarea>
                </div>
                <div class="inputContainer">
                    <label for="pElement2">Alinea 2</label>
                    <textarea name="pElement2" id="pElement1" cols="30" rows="10">{{$element->pElement2}}</textarea>
                </div>
                <div class="inputContainer">
                    <label for="pElement3">Alinea 3</label>
                    <textarea name="pElement3" id="pElement1" cols="30" rows="10">{{$element->pElement3}}</textarea>
                </div>
                <div class="inputContainer">
                    <label for="pElement4">Alinea 4</label>
                    <textarea name="pElement4" id="pElement1" cols="30" rows="10">{{$element->pElement4}}</textarea>
                </div>
                <input type="submit" value="Submit" id="submit">
                @endforeach
            </form>
        </div>
    </main>
    @include('layouts.footer')
</body>

</html>