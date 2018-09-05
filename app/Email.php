<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'user_id', 'email', 'password',
    ];

    public function EmailPassword()
    {
        return $this->hasOne('App\EmailPassword');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
