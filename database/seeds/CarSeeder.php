<?php

use App\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            $cars = [
                [
                    'marca'=>'BMW',
                    'modello'=>'X5',
                    'prezzo'=>'71140',
                    'disponibile'=>'1',
                ],
                [
                    'marca'=>'Toyota',
                    'modello'=>'Corolla',
                    'prezzo'=>'28770',
                    'disponibile'=>'1',
                ],
                [
                    'marca'=>'Ferrari',
                    'modello'=>'Roma',
                    'prezzo'=>'999999',
                    'disponibile'=>'0',
                ],
                [
                    'marca'=>'Puegot',
                    'modello'=>'308',
                    'prezzo'=>'24650',
                    'disponibile'=>'1',
                ],
            ];

            foreach ($cars as $car) {
                $newCar = new Car();
                $newCar->marca = $car['marca'];
                $newCar->modello = $car['modello'];
                $newCar->prezzo = $car['prezzo'];
                $newCar->disponibile = $car['disponibile'];
                $newCar->save();
            }
    }
}
