<?php

namespace App\Http\Controllers;

use App\Scholar;
use Illuminate\Http\Request;

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
        $totalMale=Scholar::where('gender','male')->count();
        $totalFemale=Scholar::where('gender','female')->count();
        $topInDistrict=Scholar::where('selection_criteria','Top In District')->count();
        $wtf=Scholar::where('selection_criteria','Wing To Fly')->count();
        $analysisData=array(
            'totalScholars'=>$totalScholars,
            'totalMale'=>$totalMale,
            'totalFemale'=>$totalFemale,
            'topInDistrict'=>$topInDistrict,
            'wtf'=>$wtf
        );
        return view('admin.dashboard',compact('analysisData',$analysisData));

    }

}
