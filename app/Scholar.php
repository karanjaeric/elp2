<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholar extends Model
{
    //

    protected $fillable = [
        'pf_number', 'name', 'high_school', 'gender', 'mean_grade', 'elp_class', 'selection_criteria_id', 'county_id', 'branch_id', 'phone_number', 'email1', 'email2', 'family_contact', 'family_contact_relationship', 'course_id'
    ];

    protected $table = 'scholars';

    public function university()
    {
        return $this->belongsTo('App\University', 'university_id');
    }

    public function course()
    {
        return $this->hasOne('App\Course', 'course_id');
    }

    public function meanGrdae()
    {
        return $this->hasOne('App\MeanGrade', 'mean_grade_id');
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

}
