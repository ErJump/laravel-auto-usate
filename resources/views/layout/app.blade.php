<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Auto Usate</title>
</head>
<header class="bg-primary p-3">
    <ul>
        <li class="d-inline">
            <a class="text-white btn" href="{{route('cars.index')}}">Home</a>
        </li>
        <li class="d-inline">
            <a class="text-white btn btn-success" href="{{route('cars.create')}}">Create new car</a>
        </li>
        <li class="d-inline">
            <a class="text-white btn btn-danger" href="{{route('optionals.index')}}">Optional List</a>
        </li>
    </ul>
</header>

<body>
    <main class="container-lg p-5 bg-dark text-white rounded mt-5">
        @yield('content')
    </main>
</body>

</html>
