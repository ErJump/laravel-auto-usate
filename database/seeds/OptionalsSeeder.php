<?php

use App\Optional;
use Illuminate\Database\Seeder;

class OptionalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $optionals =[
            'sedili riscaldati',
            'gps',
            'antifurto',
            'aria condizionata',
            'accendi sigari',
            'sensori di parcheggio',
            'telefono',
            'abs',
            'fari allo xeno',
            'usb',
        ];

        foreach ($optionals as $optional) {
            $newOptional= new Optional();
            $newOptional->name = $optional;
            $newOptional->save();
        }

    }
}
