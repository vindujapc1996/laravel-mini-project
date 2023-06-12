<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function showlogin(Request $request)
    {
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('adminhome');
        }
        
        return back()->withErrors([
            'email'=>'the provided credentials do not match our records.'
        ]);
    }
    public function stafflogin()
    {
        return view('stafflogin');
    }
    public function log(Request $request)
    {
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('staffhome');
        }
        return back()->withErrors([
            'email'=>'the provided credentials do not match our records.'
        ]);
   
    }
    
}
