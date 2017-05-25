<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestPrint extends Model
{
    protected $table='requests';

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

}