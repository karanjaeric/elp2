
@extends('layouts.app')
@section('content')
<form action="{{ route('register') }}" method="POST">
    @csrf
    <div>
    <input type="text" name="usertype" id="usertype" value="2" hidden>
    <div>
    <label>First Name</label>
    <input type="text" name="firstname" id="firstname">
    </div>
    <div>
    <label>Last Name</label>
    <input type="text" name="lastname" id="lastname">
    </div>
    <div>
    <label>Gender</label>
    <input type="text" name="gender" id="gender">
    </div>
    <div>
    <label>email</label>
    <input type="text" name="email" id="email">
    </div>
    <div>
    <label>Phone Number</label>
    <input type="text" name="phonenumber" id="phonenumber">
    </div>
    <div>
    <label>Alternative Number</label>
    <input type="text" name="phonenumber2" id="phonenumber2">
    </div>
    <div>
    <label>University</label>
    <input type="text" name="university" id="university">
    </div>
    <div>
    <label>Course</label>
    <input type="text" name="course" id="course">
    </div>
    <div>
    <label>Github</label>
    <input type="text" name="github" id="github">
    </div>
    <div>
    <label>Password</label>
    <input type="password" name="password" id="password">
    </div>
    <button class="btn btn-primary" type="submit">Create Account</button>
    </div>
</form>
@endsection
