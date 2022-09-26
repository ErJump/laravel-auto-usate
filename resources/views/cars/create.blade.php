@extends('layout.app')

@section('content')
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        @method('POST')
        <!-- Name input -->
        <div class="form-outline mb-4">
            <input name='marca' value='' type="text" id="form4Example1" class="form-control" />
            <label class="form-label" for="form4Example1">Marca</label>
        </div>
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input name='modello' value='' type="text" id="form4Example2" class="form-control" />
            <label class="form-label" for="form4Example2">modello</label>
        </div>
        <!-- Message input -->
        <div class="form-outline mb-4">
            <input name='prezzo' value='' type="number" step="0.1" id="form4Example3" class="form-control" />
            <label class="form-label" for="form4Example3">prezzo</label>
        </div>
        <div class="form-outline mb-4">
            @foreach ($optionals as $optional)

            <div class="form-check">
                <input type="checkbox" name="optionals[]" class="form-check-input" type="checkbox" id="input-optionals{{$optional->id}}" value="{{$optional->id}}">
                <label for="input-optionals{{$optional->id}}" class="form-check-label ">{{$optional->name}}</label>
            </div>
            @endforeach

        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
    </form>
@endsection
