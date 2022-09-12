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

<body>
    <main>
        <h1 class="text-center">Belle le macchine</h1>
        <div class="container">
            <div class="row">
                @foreach ( $cars as $car)


                    <div class="card col-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $car->marca }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted text-center">{{ $car->modello }}</h6>
                            <p class="card-text text-center">{{$car->prezzo}}.</p>
                            <p class="card-text text-center">{{$car->disponibile}}.</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </main>
</body>

</html>
