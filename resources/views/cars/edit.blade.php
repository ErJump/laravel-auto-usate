@extends('layout.app')

@section('content')
    <form action="{{ route('cars.update', $car->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Name input -->
        <div class="form-outline mb-4">
            <input name='marca' value='{{ old('marca', $car->marca) }}' type="text" id="form4Example1" class="form-control" />
            <label class="form-label" for="form4Example1">Marca</label>
        </div>
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input name='modello' value='{{ old('modello', $car->modello) }}' type="text" id="form4Example2" class="form-control" />
            <label class="form-label" for="form4Example2">modello</label>
        </div>
        <!-- Message input -->
        <div class="form-outline mb-4">
            <input name='prezzo' value='{{ old('prezzo', $car->prezzo) }}' type="text" id="form4Example3" class="form-control" />
            <label class="form-label" for="form4Example3">prezzo</label>
        </div>
        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
            <input class="form-check-input me-2" type="checkbox" value="{{old('disponibile', $car->disponibile)}}" id="form4Example4" {{old('disponibile', $car->disponibile) == 1 ? 'checked' : '' }} />
            <label class="form-check-label" for="form4Example4">
                Send me a copy of this message
            </label>
        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
    </form>
@endsection
