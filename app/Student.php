<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'code', 'user_id', 'program_id',
    ];

    public function rating()
    {
        return $this->hasMany('App\Rating');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function program()
    {
        return $this->belongsTo('App\Program');
    }
}
