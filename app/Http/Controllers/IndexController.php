<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $cars = Car::all();
        return view('home', compact('cars'));
    }

}
