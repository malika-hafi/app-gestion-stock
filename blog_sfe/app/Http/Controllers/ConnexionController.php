<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    //
      public function login(Request $req)
     {
      $username = $req->input('username');
      $password = $req->input('password');

      $checkLogin = DB::table('users')->where(['username'=>$username,'password'=>$password])->get();
      if(count($checkLogin)  >0)
      {
       echo "Login SuccessFull<br/>";;
      }
      else
      {
       echo "Login Faield Wrong Data Passed";
      }
     }
}
