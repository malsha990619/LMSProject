<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::user()->userType =='admin')
        {
            return view ('admin_home');
        }
        if(Auth::user()->userType =='teacher')
        {
            return view('teacher_home');
        }
        else{
            return view('dashboard');
        }
    }
    //
}
