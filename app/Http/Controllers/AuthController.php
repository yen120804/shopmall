<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }


    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home')->with('success', 'Login successfully');
        }

        return redirect()->back()->with('error', 'Login fail');
    }

    public function register(){
        return view('register');
    }

    public function registerPost(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|unique:users,email',
            'password'=> 'required|confirmed'
        ]);

         User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password)
        ]);

        return redirect()->route('login')->with('success', 'Register Successfully');
    }

    public function logout(Request $request)
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/')->with('success', 'Logout Successfully');
    }
}
