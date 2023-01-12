<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
//use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class pageController extends Controller
{
    public function register(){
        return view('pages/log');
    }
    public function home(){
        return view('pages/userform');
    }
    public function registerlog(Request $request)
    {
        $request->validate([
            'name' => 'required|max:25',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        Auth::login($user);
        return back()->with('success', 'You re successfully loged in');

    }
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function login(Request $request)
    {
        $details = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($details)){
            return redirect()->intended('/home');
        }
        return back()->withErrors([
            'email'=>'Invalid Login Details',
            'password'=>'Invalid Login Details'
        ]);
        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);
 
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
 
        //     return redirect()->intended('pages/home');
        // }
 
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->flush();
        return redirect('/');
        
    }
}
