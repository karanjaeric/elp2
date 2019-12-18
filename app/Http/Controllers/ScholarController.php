<?php

namespace App\Http\Controllers;

use App\Gender;
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
        return view('admin.createscholar');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Scholar::create([
            'pf_number' => $request['pf_number'],
            'name' => $request['name'],
            'high_school' => $request['high_school'],
            'gender' => $request['gender'],
            'mean_grade' => $request['mean_grade'],
            'elp_class' => $request['elp_class'],
            'selection_criteria' => $request['selection_criteria'],
            'county_of_residence' => $request['county_of_residence'],
            'branch_posting' => $request['branch_posting'],
            'phone_number' => $request['phone_number'],
            'email1' => $request['email1'],
            'email2' => $request['email2'],
            'family_contact' => $request['family_contact'],
            'family_contact_relationship' => $request['family_contact_relationship'],
            'university' => $request['university'],
            'course' => $request['course'],
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
        $wtfSelectionCriteria=SelectionCriteria::where('criteria','Wings To Fly')->first();
        $topInDistrictSelectionCriteria=SelectionCriteria::where('criteria','Top In District')->first();
        $topInDistrict=Scholar::where('selection_criteria_id',$topInDistrictSelectionCriteria->id)->count();
        $wtf=Scholar::where('selection_criteria_id',$wtfSelectionCriteria->id)->count();

        $localUniversitiesId=UniversityCategory::where('name','Local')->first();
        $globalUniversitiesId=UniversityCategory::where('name','Global')->first();
        $localScholars=Scholar::where('university_id',University::where('university_category_id',$localUniversitiesId)->select('id'))->count();
        dd($localScholars);
        $globalScholars=Scholar::where('university_id',University::where('university_category_id',$globalUniversitiesId)->get('id'));
        $analysisData=array(
            'totalScholars'=>$totalScholars,
            'totalMale'=>$totalMale,
            'totalFemale'=>$totalFemale,
            'topInDistrict'=>$topInDistrict,
            'wtf'=>$wtf,
            'localScholars'=>$localScholars,
            'globalScholars'=>$globalScholars,
        );
        return view('admin.dashboard',compact('analysisData',$analysisData));

    }

}
