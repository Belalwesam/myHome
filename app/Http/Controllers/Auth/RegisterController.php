<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function registerPage() {
        return view('auth.regsiter');
    }
    public function storeUser(Request $request) {
        //validate the inputs 
        $this->validate($request , [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' =>'required|confirmed'
        ]);
        //saving user's info in the database 
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        //signing in the user after register
        Auth::attempt($request->only('email' , 'password'));
        //redirecting the user to his dashbaord
        return redirect()->route('user.dashboard');
    }
}
