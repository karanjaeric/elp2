<?php

namespace App\Http\Controllers;

use App\Material;
use App\User;
use App\Meeting;
use Illuminate\Http\Request;

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
}
