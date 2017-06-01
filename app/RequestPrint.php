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

    public function user()
    {
    	return $this->belongsTo('App\User', 'owner_id');
    }

    public function comment()
    {
    	return $this->hasMany('App\Comments');
    }

    public function printer()
    {
    	return $this->belongsTo('App\Printer');
    }

    public function closer()
    {
    	return $this->belongsTo('App\User');
    }
}