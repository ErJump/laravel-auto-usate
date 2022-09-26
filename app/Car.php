<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'marca',
        'modello',
        'prezzo',
        'disponibile',
    ];

    public function optionals(){
        return $this->belongsToMany('App\Optional');
    }
}
