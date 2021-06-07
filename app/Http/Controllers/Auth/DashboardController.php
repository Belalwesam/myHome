<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function dashboard() {
        $user =User::find(auth()->user()->id);
        $listings = $user->listings()->orderBy('id','DESC')->get();
        return view('main.dashboard')->with('listings' , $listings);
    }
}
