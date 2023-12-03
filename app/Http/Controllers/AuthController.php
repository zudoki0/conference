<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    function login() {
        return view('auth.login');
    }
    function register() {
        return view('auth.register');
    }
    function save(Request $request) {
        $request->validate([
            'username'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5'
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $save = $user->save();
        
        if($save) {
            return back()->with('success', 'New User has been successfully added to database');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
    function check(Request $request) {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5'
        ]);

        $user = User::where('email','=',$request->email)->first();

        if($user && Hash::check($request->password, $user->password)) {
            session()->put('user', $user->id);
            return redirect('/');
        } else {
            return back()->with('fail', 'Invalid credentials');
        }
    }
    function logout() {
        session()->forget('user');
        return redirect('/');
    }
}
