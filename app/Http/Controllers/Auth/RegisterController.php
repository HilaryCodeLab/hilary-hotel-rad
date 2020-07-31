<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
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
    protected $redirectTo = RouteServiceProvider::HOME;

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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'given_name' => ['required', 'string', 'max:255'],
            'family_name' => ['required', 'string', 'max:255'],
            'dob' => ['required','date','before:18 years ago'],
            'before'=>['You must be at least 18 years old'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image'=>['sometimes','image','mimes:jpg,jpeg,png,gif,bmp,svg','max:1000']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if(request()->has('image')){
          $imageUploaded = request()->file('image');

            //create unique name for every image, $imageUploaded is extension of image
          $imageName = time() . '.' . $imageUploaded->getClientOriginalExtension();
          $imagePath = public_path('/img/');
          $imageUploaded->move($imagePath,$imageName);

          $user = User::create([
                                    'given_name' => $data['given_name'],
                                    'family_name' => $data['family_name'],
                                    'dob'=>$data['dob'],
                                    'email' => $data['email'],
                                    'password' => Hash::make($data['password']),
                                    'image'=>'img/' . $imageName,
                                ]);
          $user->assignRole('guest');
          return $user;

        }
        //if no request for image, run the following code
        $user = User::create([
            'given_name' => $data['given_name'],
            'family_name' => $data['family_name'],
            'dob'=> $data['dob'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user->assignRole('guest');
        return $user;



    }
}
