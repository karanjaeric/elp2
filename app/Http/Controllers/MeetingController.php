<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Meeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $meetings = DB::table('meetings')->orderBy('date','desc')->get();
        return view('techhub.meeting.index',compact('meetings','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $user = auth()->user();
      return view('techhub.meeting.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $meetingdate =  Carbon::createFromDate($request['yyyy'], $request['mm'], $request['dd'], 'Africa/Nairobi');
        //return($meetingdate);
        Meeting::create([
          'name'=> $request['name'],
          'host'=> $request['host'],
          'venue'=>$request['venue'],
          'date'=> $meetingdate,
          'description'=>$request['description'],
        ]);
        return redirect('/meeting');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function show(Meeting $meeting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function edit(Meeting $meeting)
    {
        $id = $meeting->id;
        $meeting = meeting::with('attendees')->where('id',$id)->get()->first();
        $user = auth()->user();
        //return($meeting);
        return view('techhub.meeting.edit',compact('user','meeting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meeting $meeting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meeting $meeting)
    {
        //
    }
}
