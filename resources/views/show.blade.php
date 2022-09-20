@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-12" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $car->marca }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted text-center">{{ $car->modello }}</h6>
                    <p class="card-text text-center">{{$car->prezzo}}.</p>
                    <p class="card-text text-center">{{$car->disponibile}}.</p>
                </div>
            </div>
            <a href="{{route('index')}}">Indietro</a>
        </div>
    </div>
@endsection