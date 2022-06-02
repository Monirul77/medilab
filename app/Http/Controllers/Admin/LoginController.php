<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    

    use AuthenticatesUsers;
    public function __construct()
    {
      $this->middleware('guest:admin', ['except' => ['logout']]);
    }
    public function index()
    {
        return view('home');
    }
    
    public function showLoginForm()
    {
      return view('admin.auth.login');
    }
    
    protected function guard()
    {
        return Auth::guard('admin');
    }
     
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin.login');
    }


}
