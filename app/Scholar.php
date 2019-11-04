<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholar extends Model
{
    //

    protected $fillable = [
        'pf_number','name','high_school','gender','mean_grade','elp_class','selection_criteria','county_of_residence','branch_posting','phone_number','email1','email2','family_contact','family_contact_relationship','university','course'
    ];

    protected $table = 'scholars';
}
