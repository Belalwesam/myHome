<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function loginPage() {
        return view('auth.login');
    }
    public function loginAttempt(Request $request) {
        //validation
        $this->validate($request , [
            'email'=> 'required|email',
            'password' => 'required'
        ]);
        //checking if the creds are right 
        if (Auth::attempt($request->only('email' , 'password'))) {
            return redirect()->route('user.dashboard');
        } else {
            return back()->with('status' , 'invalid login information');
        }
    }
}
