<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Material;
use App\User;
use App\Meeting;
use App\meeting_user;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class DisplayController extends Controller
{
    public function dashboard(){
      /*$current = Carbon::now();
      //$current = $current->toDateString();
      $event = Carbon::createFromDate(2020, 1, 25, 'Africa/Nairobi');
      //$event = $event->toDateString();
      $date = $event->diffInDays($current);
      $time = Carbon::now()->addDays($date)->diffForHumans();
      */
      $days = 0;
      $controldate = Carbon::now();
      $currentdate = Carbon::now();
      $allmeetings = DB::table('meetings');
      $meetings = $allmeetings->where('date', '>=', $currentdate);
      $meetings = $meetings->orderBy('date','asc')->get();
      $materials = Material::all();
      return view('techhub.dashboard',compact('materials','meetings','currentdate','controldate','days'));
      //return ($meetings);
    }
    public function members(){
      $members = User::all();
      return view('techhub.members',compact('members'));
    }
    public function usermeeting(Request $request){
      $id = auth()->user()->id;
      meeting_user::create([
        'meeting_id'=>$request['meetingid'],
        'user_id'   =>$id,
        'status'    => 0,
      ]);
      return redirect('/home');

    }
}
