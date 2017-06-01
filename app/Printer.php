<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    protected $table='printers';

    public function requests()
    {
    	return $this->hasMany('App\RequestPrint');
    }
}
