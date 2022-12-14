@extends('layout.app')

@section('content')
    <h1 class="text-center">Belle le macchine</h1>
    <div class="container">
        <a href="{{ route('cars.create') }}" class="btn btn-primary">inserisci macchina</a>
        <div class="row my-4 g-4">
            @foreach ( $cars as $car)
                <div class="card col-3 mx-2" style="width: 18rem;">
                    <a href="{{route('cars.show', $car->id)}}">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $car->marca }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted text-center">{{ $car->modello }}</h6>
                            <p class="card-text text-center">{{$car->prezzo}}.</p>
                            <p class="card-text text-center">{{$car->disponibile}}.</p>
                            <form action="{{route('cars.destroy', $car->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">destroy</button>
                            </form>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
