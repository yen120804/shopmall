<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function loginform()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }
    return back()->withErrors(['email' => 'The provided credentials do not match our records.',
    ]);
    }
    public function register()
    {
        return view('register');
    }

    function forgot()
    {
        return view('forgot');
    }
}
