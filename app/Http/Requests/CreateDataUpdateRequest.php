<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateDataUpdateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id'                   => 'required|exists:users,id',
            'identification'            => 'required|integer',
            'first_name'                => 'required|max:80',
            'last_name'                 => 'required|max:80',
            'birth_date'                => 'required|date',
            'age'                       => 'required|integer',
            'birth_municipality_id'     => 'required|exists:municipalities,id',
            'birth_country_id'          => 'required|exists:countries,id',
            'residence_municipality_id' => 'required|exists:municipalities,id',
            'residence_address'         => 'required|max:100',
            'residential_area'          => 'required|max:100',
            'sex_id'                    => 'required|exists:sexes,id',
            'sexual_orientation_id'     => 'required|exists:sexual_orientations,id',
            'civil_state_id'            => 'required|exists:civil_states,id',
            'personal_email'            => 'required|email',
            'one_phone'                 => 'required|integer',
            'two_phone'                 => 'required|integer|different:one_phone',
            'program_id'                => 'required|exists:programs,id',
            'semester'                  => 'required|integer',
            'schedule_id'               => 'required|exists:schedules,id',
            'credit_id'                 => 'required|exists:credits,id',
            'ethnic_group_id'           => 'required|exists:ethnic_groups,id',
            'indigenous_people_id'      => 'required|exists:indigenous_peoples,id',
            'black_community_id'        => 'required|exists:black_communities,id',
            'victim_type_id'            => 'required|exists:victim_types,id',
            'disability_type_id'        => 'required|exists:disability_types,id',
            'one_full_name_family'      => 'required|max:80',
            'one_relationship_family'   => 'required|max:80',
            'one_phone_family'          => 'required|integer|different:one_phone|different:two_phone',
            'two_full_name_family'      => 'required|max:80',
            'two_relationship_family'   => 'required|max:80',
            'two_phone_family'          => 'required|integer|different:one_phone|different:two_phone|different:one_phone_family',
        ];
    }
}
