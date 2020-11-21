<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use User;
class LoginController extends Controller
{
    

    use AuthenticatesUsers;

    
    protected $redirectTo = '/dashboard';

    protected function hasTooManyLoginAttempts ($request) {
        $maxLoginAttempts = 2;
        $lockoutTime = 5; // 5 minutes
        return $this->limiter()->tooManyAttempts(
            $this->throttleKey($request), $maxLoginAttempts, $lockoutTime
        );
    }

    public function logout(Request $request) {
      Auth::logout();
      return redirect('/login');
    }
    
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
}
