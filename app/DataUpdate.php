<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataUpdate extends Model
{
    protected $fillable = [
        'user_id', 'identification', 'first_name', 'last_name', 'birth_date', 'age', 'birth_municipality_id', 'birth_country_id', 'residence_municipality_id', 'residence_address', 'residential_area', 'sex_id', 'sexual_orientation_id', 'civil_state_id', 'personal_email', 'one_phone', 'two_phone', 'program_id', 'semester', 'schedule_id', 'credit_id', 'ethnic_group_id', 'indigenous_people_id', 'black_community_id', 'victim_type_id', 'disability_type_id', 'one_full_name_family', 'one_relationship_family', 'one_phone_family', 'two_full_name_family', 'two_relationship_family', 'two_phone_family'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
