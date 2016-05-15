<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identification', 'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function email()
    {
        return $this->hasOne('App\Email');
    }

    public function student()
    {
        return $this->hasMany('App\Student');
    }

    public function data_update()
    {
        return $this->hasOne('App\DataUpdate');
    }

}
