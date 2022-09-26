@extends('layout.app')

@section('content')
    <h1 class="text-center">Belli gli Optionals</h1>
    <div class="container">
        <a href="{{ route('optionals.create') }}" class="btn btn-primary">inserisci optional</a>
        <div class="row my-4 g-4">
            @foreach ( $optionals as $optional)
                <div class="card col-3 mx-2" style="width: 18rem;">
                    <a href="{{route('optionals.show', $optional->id)}}">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $optional->name }}</h5>
                            <form action="{{route('optionals.destroy', $optional->id)}}" method="POST">
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
