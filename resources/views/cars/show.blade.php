@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card w-100 col-12" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $car->marca }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted text-center">{{ $car->modello }}</h6>
                    <p class="card-text text-center">{{$car->prezzo}}.</p>
                    <p class="card-text text-center">{{$car->disponibile}}.</p>
                    <div>
                        <h5 class="mb-3">Optionals:</h5>
                        @forelse ($car->optionals as $optional)
                            <span>{{$optional->name}}</span><br>
                        @empty
                            <span>nessun optional</span>
                        @endforelse
                    </div>
                </div>
            </div>
            <a href="{{route('cars.index')}}" class="btn btn-secondary">Indietro</a>
            <a href="{{route('cars.edit', $car->id)}}" class="btn btn-success">Modifica</a>
        </div>
    </div>
@endsection
