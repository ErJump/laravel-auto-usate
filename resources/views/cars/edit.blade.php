@extends('layout.app')

@section('content')
@if ($errors->any())

<div class="alert alert-danger">
<ul>
    @foreach ($errors->all() as $error)

    <li>{{$error}}</li>
        
    @endforeach
</ul>
</div>
    
@endif


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
            <input name='prezzo' value='{{ old('prezzo', $car->prezzo) }}' type="number" step="0.1"  type="text" id="form4Example3" class="form-control" />
            <label class="form-label" for="form4Example3">prezzo</label>
        </div>
        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
            <input type="hidden" name="disponibile" value="0">
            <input class="form-check-input me-2" type="checkbox" value="1" id="form4Example4" name="disponibile" {{old('disponibile', $car->disponibile) == 1 ? 'checked' : '' }}/>


            <label class="form-check-label" for="form4Example4">
                Disponibile
            </label>
        </div>
        <div class="form-outline mb-4">
            @foreach ($optionals as $optional)

            <div class="form-check">
                <input type="checkbox" name="optionals[]" class="form-check-input" type="checkbox" id="input-optionals{{$optional->id}}" value="{{$optional->id}}"
                {{$car->optionals->contains($optional) ? 'checked' : ''}}>
                <label for="input-optionals{{$optional->id}}" class="form-check-label ">{{$optional->name}}</label>
            </div>
            @endforeach

        </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
    </form>
@endsection
