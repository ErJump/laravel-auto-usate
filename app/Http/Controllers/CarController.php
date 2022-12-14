<?php

namespace App\Http\Controllers;

use App\Car;
use App\Optional;
use Illuminate\Http\Request;

class CarController extends Controller
{

    protected $validationArray = [
     'marca'=> 'required|string|min:2',
     'modello'=>'required|string|min:2',
     'prezzo'=>'required|numeric',
     'disponibile'=>'boolean',
     'optionals'=>'nullable|exists:optionals,id'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('home', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $optionals = Optional::all();

        return view('cars.create', compact('optionals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->validate($this->validationArray);

        $data['disponibile']=1;
        $car= new Car();
        $car->fill($data);
        $car->save();
        if (isset($data['optionals'])) {
            $car->optionals()->attach($data['optionals']);
        }

        return redirect()->route('cars.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::findOrFail($id);
        //dd('hello');
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        $optionals = Optional::all();

        return view('cars.edit', compact('car','optionals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate($this->validationArray);
        $car = Car::findOrFail($id);
        $car->update($data);

        if (isset($data['optionals'])) {
            $car->optionals()->sync($data['optionals']);
        } else{
            $car->optionals()->detach();
        }

        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('cars.index');
    }
}
