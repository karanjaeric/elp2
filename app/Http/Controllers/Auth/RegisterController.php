<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class   RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

     /*Implements the constraints necessary before user data submission.*/
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required'],
            'lastname' => ['required'],
            'gender' => ['required'],
            'email' => ['required'],
            'phonenumber' => ['required'],
            'phonenumber2' => ['required'],
            'university' => ['required'],
            'course' => ['required'],
            'password' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

     /*Creates a new user in the database*/
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'phonenumber' => $data['phonenumber'],
            'phonenumber2' => $data['phonenumber2'],
            'university' => $data['university'],
            'course' => $data['course'],
            'github'=>$data['github'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
