<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    public function index(){
        if (Session()->has('id'))
            return redirect('home');
        return view('signup');
    }
    public function register(Request $req){
        $users=Users::all();
        $data = compact('users');
        
        $req->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed|min:6',
                'password_confirmation' => 'required'
            ]
        );

        $usr = new Users;
        $usr->u_name = $req['name'];
        $usr->email = $req['email'];
        $usr->password = md5($req['password']);
        $usr->save();
        
        session($usr->toArray());
        // print_r(session()->all());
        return redirect('home');
    }
}
