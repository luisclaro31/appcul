<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'user_id', 'email', 'password',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
