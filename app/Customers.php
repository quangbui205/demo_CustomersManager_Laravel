<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table='customer';

    public function city()
    {
        return $this->belongsTo('App\City');
    }
}
