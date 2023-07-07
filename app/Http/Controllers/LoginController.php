<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginCheck(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->with('login_error', 'error');
    }
}
