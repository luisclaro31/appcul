<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'value', 'period', 'student_id', 'subject_id',
    ];

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
