<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailPassword extends Model
{
    protected $fillable = [
        'user_id', 'email_id', 'personal_email', 'phone', 'type_of_problem', 'category', 'state',
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Email()
    {
        return $this->belongsTo('App\Email');
    }

}
