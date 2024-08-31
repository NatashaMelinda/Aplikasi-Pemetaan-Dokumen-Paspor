<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class AuthController extends Controller
{
    public function login ()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }else{
            return view('login');
        }
    }

    public function register ()
    {
        return view('register');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::Attempt($credentials)) {
            return redirect('dashboard');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
        // //pengecekan apakah login valid
        // if (Auth::attempt($credentials)) {

        //     //pengecekan apakah user status = active
        //     if (Auth::user()->status != '') {
        //         Session::flash('status', 'failed');
        //         Session::flash('message', 'Your Account is not active yet. please contact admin!');
        //         return redirect('/login');
        //     }
        //     $request->session()->regenerate();
        //     if (Auth::user()->role_id == 1) {
        //         return redirect('dashboard');
                
        //         // return redirect()->intended('dashboard');
        //     }
        //     if (Auth::user()->role_id == 2) {
        //         return redirect('dashboard');

        //     }
        //     Session::flash('status', 'failed');
        //     Session::flash('message', 'Login Invalid');
        //     return redirect('/login');
        // }
    }

    public function registerProcess(Request $request)
    {
        dd($request->all());
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}