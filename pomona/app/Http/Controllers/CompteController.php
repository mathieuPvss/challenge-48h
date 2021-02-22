<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    //inscription
    public function formaulaire(){
        return view('inscription');
    }

    public function inscri(){
        request()->validate([
            'email'=>['required','email'],
            'password'=>['required','confirmed','min:8'],
            'password_confirmation'=>['required'],
            'name'=>['required']
        ]);

        $user =User::create([
            'email' =>request('email'),
            'password' =>bcrypt(request('password')),
            'name' => request('name'),
        ]);
        return "your email is " . request('email');
    }

    //se connecter
    public function connect(){
        return view('connexion');
    }

    public function connecter(){
    request()->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'min:8']
    ]);
    $result = auth()->attempt([
        'email'=> request('email'),
        'password' =>request('password')
    ]);
    if($result) {
        return redirect('/dashboard');
    }

    return back()->withErrors([
        'email'=>"the credential do not match"
    ]);
    }
    
}
