<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class loginController extends Controller
{
    public function connexion(){
        return view('/login');
    }
    public function login(Request $request ){
        $credentials = $request->validate([
            // 'username' => ['required', 'username'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // Return $request->input('password');
        if (Auth::attempt($credentials)  && Auth::user()->roles_id === 1) {
            $request->session()->regenerate();

           // return redirect()->route('/welcome');
            return redirect()->route('afficher');

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}
