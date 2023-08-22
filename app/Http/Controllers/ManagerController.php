<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function add(){
        return view('/add_manager');
    }
public function index(){
    return view('index2');
}

    public function manage (Request $request){
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
        $client->roles_id = 2;
        // $client->password =Hash::make($request->password);
        $client->save();


        return redirect()->route('home');
}

}
