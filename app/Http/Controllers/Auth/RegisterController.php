<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

 class RegisterController extends Controller
{
     

    use RegistersUsers;

     
    protected $redirectTo = '/dashboard';
    

    
     
    public function __construct()
    {
        $this->middleware('guest');
    }

     
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255',
            'email' => 'required|max:255|unique:users',
            'lastname' => 'required|max:255',
            'firstname' => 'required|max:255',
            'password' => 'required|min:6|confirmed',
        ]);
    }

   
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'lastname' => $data['lastname'],
            'firstname' => $data['firstname'],
            'password' => bcrypt($data['password']),
        ]);
    }
}