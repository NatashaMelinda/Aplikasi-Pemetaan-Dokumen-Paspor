<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        //apakah login valid
        if (Auth::attempt($credentials)) {

            //apakah user status = active
            if (Auth::user()->status != '') {
                Session::flash('status', 'failed');
                Session::flash('message', 'Your Account is not active yet. please contact admin!');
                return redirect('/login');
            }
            $request->session()->regenerate();
            if (Auth::user()->role_id == 1) {
                return redirect('profile');
                
                // return redirect()->intended('dashboard');
            }
            if (Auth::user()->role_id == 2) {
                return redirect('dashboard');

            }
            Session::flash('status', 'failed');
            Session::flash('message', 'Login Invalid');
            return redirect('/login');
        }
    }
}