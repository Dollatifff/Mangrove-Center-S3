<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Landingcontroller extends Controller
{
    function index(){
        return view('landing.home');
    }
    function login(){
        return view('landing.login');
    }
    function loginaksi(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }else{
            return back()->with('danger', 'Login gagal, coba ulangi kembali');
        }
    }
}
