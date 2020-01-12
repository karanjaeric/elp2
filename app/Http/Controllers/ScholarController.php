<?php

namespace App\Http\Controllers;

use App\Branch;
use App\ContactRelationship;
use App\County;
use App\Course;
use App\ElpClass;
use App\Gender;
use App\HighSchool;
use App\MeanGrade;
use App\Scholar;
use App\SelectionCriteria;
use App\UniversityCategory;
use Illuminate\Http\Request;
use App\University;
class ScholarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scholars = Scholar::all();
        return view('admin.scholars', compact('scholars', $scholars));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $counties=County::all();
        $genders=Gender::all();
        $contactRelationships=ContactRelationship::all();
        $highSchools=HighSchool::all();
        $meanGrades=MeanGrade::all();
        $elpClasses=ElpClass::all();
        $selectionCriteria=SelectionCriteria::all();
        $universities=University::all();#
        $branches=Branch::all();
        $courses=Course::all();
        return view('admin.createscholar',['counties'=>$counties,'genders'=>$genders,'contactRelationships'=>$contactRelationships,'highSchools'=>$highSchools,
            'meanGrades'=>$meanGrades,'elpClasses'=>$elpClasses,'selectionCriteria'=>$selectionCriteria,'universities'=>$universities,'branches'=>$branches,
            'courses'=>$courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);


        Scholar::create([
            'pf_number' => $request['pf_number'],
            'first_name' => $request['first_name'],
            'middle_name' => $request['middle_name'],
            'surname' => $request['surname'],
            'id_number' => $request['id_number'],
            'high_school_id' => $request['high_school_id'],
            'gender_id' => $request['gender_id'],
            'mean_grade_id' => $request['mean_grade_id'],
            'elp_class_id' => $request['elp_class_id'],
            'selection_criteria_id' => $request['selection_criteria_id'],
            'county_id' => $request['county_id'],
            'branch_id' => $request['branch_id'],
            'phone_number' => $request['phone_number'],
            'phone_number2' => $request['phone_number2'],
            'email1' => $request['email1'],
            'email2' => $request['email2'],
            'family_contact' => $request['family_contact'],
            'contact_relationship_id' => $request['contact_relationship_id'],
            'university_id' => $request['university_id'],
            'course_id' => $request['course_id'],
        ]);
        $scholars = Scholar::all();
        return view('admin.scholars', compact('scholars', $scholars));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Scholar $scholar
     * @return \Illuminate\Http\Response
     */
    public function show(Scholar $scholar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Scholar $scholar
     * @return \Illuminate\Http\Response
     */
    public function edit(Scholar $scholar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Scholar $scholar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scholar $scholar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Scholar $scholar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scholar $scholar)
    {
        //
    }

    public function dashboard(Request $request)
    {
        $totalScholars=Scholar::all()->count();
        $maleGender=Gender::where('name','Male')->first();
        $femaleGender=Gender::where('name','Female')->first();

        $totalMale=Scholar::where('gender_id',$maleGender->id)->count();
        $totalFemale=Scholar::where('gender_id',$femaleGender->id)->count();
        $wtfSelectionCriteria=SelectionCriteria::where('name','Wings To Fly')->first();
        $topInDistrictSelectionCriteria=SelectionCriteria::where('name','Top In District')->first();
        $topInDistrict=Scholar::where('selection_criteria_id',$topInDistrictSelectionCriteria->id)->count();
        $wtf=Scholar::where('selection_criteria_id',$wtfSelectionCriteria->id)->count();

        $localUniversitiesId=UniversityCategory::where('name','Local')->first();
        $globalUniversitiesId=UniversityCategory::where('name','Global')->first();
//        $localScholars=Scholar::where('university_id',University::where('university_category_id',$localUniversitiesId)->select('id'))->count();
//        dd($localScholars);
//        $globalScholars=Scholar::where('university_id',University::where('university_category_id',$globalUniversitiesId)->get('id'));
        $analysisData=array(
            'totalScholars'=>$totalScholars,
            'totalMale'=>$totalMale,
            'totalFemale'=>$totalFemale,
            'topInDistrict'=>$topInDistrict,
            'wtf'=>$wtf,
            'localScholars'=>10,
            'globalScholars'=>10,
        );
        return view('admin.dashboard',compact('analysisData',$analysisData));

    }

    public function test(Request $request)
    {
        return ($request);
    }
}
