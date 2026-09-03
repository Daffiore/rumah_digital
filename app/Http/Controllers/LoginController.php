<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use auth;
use Illuminate\Http\Request;

class LoginController
{
    public function auth(){
         if(session()->has('user')) {
        return redirect('/');
    }
    return view('auth');
    }

    public function logincik(Request $request)
    {
     

    $incomingfields = $request->validate([
        'email' => ['required', 'email'], 
        'password' => ['required', 'min:8'],
    ]);

    if (auth()->attempt(['email' => $incomingfields['email'], 'password' => $incomingfields['password']])) {
        $request->session()->regenerate();
        $role = auth()->user()->role;
        if (auth()->user()->divisi != 'Umum'){
            return redirect('dashboard');
        }
        else if ($role == 'admin' || $role == 'superadmin') {
            return view('layouts.dashboard');
        } 
        else if ($role == 'user' || $role == 'umum') {
            return redirect('/welcome');
        }
        return redirect('/'); 
    }   
    return back()->with('error', 'Email atau Password salah');
    }

    public function logout(){
        session()->forget('user');
        return redirect('/auth');
    }

    public function home(){
        if (!session()->has('user')) {
        return redirect('/auth');}
        return view('welcome');
    }
    public function signup(){
        return view('signup');
    }
    public function register(Request $request)
    {
        $incomingfields = $request->validate([
            'name' => ['required'],
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8'],
            'divisi' => ['required']
        ]);

        $user = new \App\Models\User;
        $user->name = $incomingfields['name'];
        $user->email = $incomingfields['email'];
        $user->password = bcrypt($incomingfields['password']);
        $user->divisi = $incomingfields['divisi'];
        if($incomingfields['divisi'] == 'GRAMTI'){
        $user->role = 'superadmin';
        }
        else if($incomingfields['divisi'] == 'UMUM'){
        $user->role = 'umum';
        }
        else{
            $user->role = 'admin';
        }
        $user->save();

        return redirect('/');
    }
    
}
