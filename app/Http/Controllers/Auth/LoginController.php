<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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

    //use AuthenticatesUsers;
    use AuthenticatesUsers;
    //use Authenticatable;


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

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

    public function login(Request $request)
    {
        $inputVal = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        /*

        if (auth()->attempt(array('email' => $inputVal['email'], 'password' => $inputVal['password']))) {
           

            if (auth()->user()->role->id == 1) {
                return redirect()->route('admin.home');
            }else if(auth()->user()->role->id == 2){
                return redirect()->route('user');
            }



        } else {
            return redirect()->route('login')
                ->with('error', 'Email & Password are incorrect.');
        }

        */

        if(auth()->attempt(array('email' => $inputVal['email'], 'password' => $inputVal['password'])))
        {
            if(Auth()->user()->role_id==1){
                return route('admin.home');
            }
            elseif(Auth()->user()->role_id==2)
            {
                 return route('home');
            }
            
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }

 
}