<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
	protected $table='comments';

		 protected $fillable = [
        'comment', 'request_id'
    ];

    public function post()
    {
    	return $this->belongsTo(RequestPrint::class);
    }

    public function request()
    {
    	return $this->belongsTo('App\RequestPrint');
    }

    public function parent()
    {
    	return $this->belongsTo('App\Comments', 'parent_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function children ()
    {
    	return $this->hasMany('App\Comments', 'parent_id');
    }
}
