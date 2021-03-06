<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'profile_url', 'profile_photo', 'department_id', 'presentation', 'confirmation_code', 'confirmed',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function requests()
    {
        return $this->hasMany('App\RequestPrint', 'owner_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comments');
    }

    public function closedRequests()
    {
        return $this->hasMany('App\RequestPrint', 'closed_user_id');
    }
}
