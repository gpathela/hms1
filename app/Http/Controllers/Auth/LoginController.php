<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function authenticated(Request $request, $user)
    {
        if ( $user->role == 1 ) 
        {
            return redirect('/admin');
        }
        elseif ($user->role == 2)
        {
            return redirect('/doctor');
        }
        elseif ($user->role == 3)
        {
            return redirect('/nurse');
        }
        elseif ($user->role == 4)
        {
            return redirect('/patient');
        }
        elseif ($user->role == 5)
        {
            return redirect('/it');
        }
        elseif ($user->role == 6)
        {
            return redirect('/reception');
        }
        else
        {
            return redirect('/');
        }

        
    }
    

    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
