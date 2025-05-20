<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\SuoerAdmin;

class AuthController extends Controller
{
     public function showLogin()
    {
        $pList = SuoerAdmin::all();
        return view('auth.login', compact('pList'));
    }

    public function showSignup()
    {
        return view('auth.signup');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|in:user,admin,super-admin'
        ]);

        User::create([
             'name' => $request->name,
             'email' => $request->email,
             'password' => Hash::make($request->password),
             'role' => $request->role
        ]);
        
        return redirect('/login')->with('success', 'Account created successfully');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            
            $user = Auth::user();
            $pList = SuoerAdmin::all();
            if ($user->role === 'admin') {
                return view('dashboards.admindashboard.create', compact('pList'));
            } elseif ($user->role === 'super-admin') {
                return redirect('/super-admin/dashboard');
            }
            return redirect('/user/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
