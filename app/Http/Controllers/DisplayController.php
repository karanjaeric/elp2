<?php

namespace App\Http\Controllers;


use App\Material;
use App\User;
use App\Meeting;
use App\meeting_user;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class DisplayController extends Controller
{
    public function dashboard(){
      $meetings = Meeting::all();
      $materials = Material::all();
      return view('techhub.dashboard',compact('materials','meetings'));
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
