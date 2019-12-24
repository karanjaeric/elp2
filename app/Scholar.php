<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholar extends Model
{
    //

    protected $fillable = [
        'pf_number',
        'first_name',
        'middle_name',
        'surname',
        'id_number',
        'high_school_id',
        'gender_id',
        'mean_grade_id',
        'elp_class_id',
        'selection_criteria_id',
        'county_id',
        'branch_id',
        'phone_number',
        'phone_number2',
        'email1',
        'email2',
        'family_contact',
        'contact_relationship_id',
        'course_id',
        'university_id'
    ];

    protected $table = 'scholars';

    public function university()
    {
        return $this->belongsTo('App\University', 'university_id');
    }

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }

    public function meanGrade()
    {
        return $this->belongsTo('App\MeanGrade', 'mean_grade_id');
    }

    public function selectionCriteria()
    {

        return $this->belongsTo('App\SelectionCriteria', 'selection_criteria_id');
    }

    public function branch()
    {
        return $this->belongsTo('App\Branch', 'branch_id');
    }

    public function highSchool()
    {
        return $this->belongsTo('App\HighSchool', 'high_school_id');
    }

    public function gender()
    {
        return $this->belongsTo('App\Gender', 'high_school_id');
    }

    public function elpClass()
    {
        return $this->belongsTo('App\ElpClass', 'elp_class_id');
    }

    public function contactRelationship()
    {
        return $this->belongsTo('App\ContactRelationship', 'contact_relationship_id');
    }

    public function county()
    {
        return $this->belongsTo('App\County', 'county_id');
    }
}
