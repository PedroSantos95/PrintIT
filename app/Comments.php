<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
	protected $table='comments';

    public function post()
    {
    	return $this->belongsTo(RequestPrint::class);
    }

}
