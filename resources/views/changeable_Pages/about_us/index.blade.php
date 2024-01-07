<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About-us</title>
    @vite(['resources/css/aboutUs.css', 'resources/scss/aboutUs.scss'])
    @vite(['resources/css/general/footer.css', 'resources/scss/general/footer.scss'])
</head>

<body class="antialiased">
    <!-- [INSERT NAV BAR] -->
    <main>
        <div id="container">
            <div id="leftContainer">
                <!-- loops through all the title and image data and put it on the page -->
                @foreach($mainInfo as $info)
                <!-- puts the title data from the database on the page -->
                <h1 id="title">{{$info->title}}</h1>
                <!-- makes a edit link for the title and image -->
                <a href="{{route('aboutUs.edit', ['info' => $info])}}">edit content</a>
                <!-- makes a delete link for every title and image -->
                <a href="{{route('aboutUs.delete', ['info' => $info])}}">delete content</a>
                @endforeach
                <!-- makes a create link -->
                <a href="{{route('aboutUs.create')}}">create content</a>
                <article id="content">
                    <!-- for every header and content makes these elements with data -->
                    @foreach($contentInfo as $info)
                    <!-- makes a edit link for every header and content -->
                    <a href="{{route('aboutUs.editContent', ['info' => $info])}}">edit content</a>
                    <!-- makes a delete link for every header and content -->
                    <a href="{{route('aboutUs.deleteContent', ['info' => $info])}}">delete content</a>
                    <!-- here comes the data for the header -->
                    <h2 class="contentTitle">{{$info->header}}</h2>
                    <!-- here comes the data for the content -->
                    <p class="contentText">{{$info->content}}</p>
                    @endforeach
                </article>
            </div>

            <div id="verticalLineDivider"></div>

            <div id="rightContainer">
                <!-- for every image makes this element with the data -->
                @foreach($mainInfo as $info)
                <!-- image element with the data from the database -->
                <img src="/images/about-us/{{$info->image}}" alt="Restaurant">
                @endforeach
            </div>
        </div>
    </main>
    @include('layouts.footer')
</body>

</html>