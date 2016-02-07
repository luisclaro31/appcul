<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'code', 'description',
    ];

    public function student()
    {
        return $this->hasMany('App\Student');
    }
}
