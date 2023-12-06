<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant Rocambolesque</title>
    @vite(['resources/scss/homepage.scss', 'resources/css/homepage.css'])
</head>
<body>
    <main>
        <div id="container">
            <img src="images/homepage/Restaurant-background.png" alt="Restaurant-background">
            <div id="textBox">
                <h2>Title</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni eveniet itaque perferendis adipisci voluptates asperiores! Qui architecto dolor incidunt ab consequatur facere odit iure? Illum vel consequuntur nesciunt quidem quae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis suscipit obcaecati enim molestias ea quisquam, molestiae quaerat reiciendis mollitia ratione provident quidem. Illum accusamus quisquam ratione numquam error corrupti animi.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa repellat dolorum amet odio atque ut asperiores quisquam accusantium? Corporis perspiciatis, dolorem iste excepturi a dolor officia aut quisquam culpa delectus!</p>
            </div>
        </div>
    </main>
    @include('layouts.footer')
</body>