<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The CRUD Alphabet Consisting of :</title>
</head>
<body>
    <h1>Ralof once said "Hey you youre finally awake"</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <table>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            @foreach($menus as $menu)
                <tr>
                    <td>{{$menu->id}}</td>
                    <td>{{$menu->name}}</td>
                    <td>{{$menu->street}}</td>
                    <td>{{$menu->home_nr}}</td>
                    <td>{{$menu->zipcode}}</td>
                    <td>{{$menu->city}}</td>
                    <td>{{$menu->phone_number}}</td>
                    <td><a href="{{route('menu.edit', ['menu' => $menu])}}">Edit</a></td>
                    <td>
                        <form method="post" action="{{route('menu.delete', ['menu' => $menu])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div><p>Ralof once said : "Hey, You youre finally awake"</p></div>
</body>
</html>