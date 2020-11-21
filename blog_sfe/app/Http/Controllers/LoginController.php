<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;

class LoginController extends BaseController
{
     public function login(Request $req)
     {
      $email = $req->input('email');
      $password = $req->input('password');

      $checkLogin = DB::table('admin')->where(['email'=>$email,'password'=>$password])->get();
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

?>