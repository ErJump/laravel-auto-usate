<?php

use App\Car;
use App\Optional;
use Illuminate\Database\Seeder;

class CarOptionalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = Car::all();
        foreach($cars as $car){
            $randomOptionals = Optional::inRandomOrder()->take(rand(1, 10))->get();
            $car->optionals()->attach($randomOptionals);
        }
    }
}
