<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    
    //pengecekanlogin
    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {

            if (Auth::user()-> status != 'active') {
                Session::flash('status', 'failed');
                Session::flash('message', 'Your account is not active');
                return redirect('/login');
            }

            $request->session()->regenerate();
            if (Auth::user()->role_id ==1) {
                return redirect('/dashboard');
            }

            if (Auth::user()->role_id ==2) {
                return redirect('/profile');
            }
        }
        Session::flash('status', 'failed');
        Session::flash('message', 'username or your password is wrong');
        return redirect('/login');
        
    }
    public function registerProcess (Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users|max:100',
            'password' => 'required',
            'phone' => 'max:255',
            'addres' => 'required|max:255',
        ]);
        
        $user = User::create($request->all());

        Session::flash('status','succes');
        Session::flash('message','Regist succes, wait admin for aproval');

        return redirect('register');
    }
    
    public function logout()
    {
        return view('home');
    }




}