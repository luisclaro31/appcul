<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'code', 'description',
    ];

    public function rating()
    {
        return $this->hasMany('App\Rating');
    }
}
