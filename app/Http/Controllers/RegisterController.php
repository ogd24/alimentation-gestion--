<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerVue(){
        return view('register');
    }
    public function register(Request $request){
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $client = new User();
        $client->firstname = $request->input('firstname');
        $client->lastname = $request->input('lastname');
        $client->username = $request->input('username');
        $client->email = $request->input('email');
        $client->password = bcrypt($request->password);
        $client->roles_id = 1;
        $client->save();

        return redirect()->intended('/login');
        
}
}
