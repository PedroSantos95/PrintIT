<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestPrint extends Model
{
    protected $table='requests';
    /**
     * The attributes that are mass assignable.
     *
     * @var array 
     * 
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}