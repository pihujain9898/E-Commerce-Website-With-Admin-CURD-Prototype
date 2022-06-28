<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        if (Session()->has('u_id'))
            return redirect('home');
        return view('login');
    }

    public function logout(){
        Session()->flush();
        return redirect('home');
    }

    public function login(Request $req){
        $users=Users::all();
        $data = compact('users');

        $req->validate(
            [
                'user' => 'required|email|exists:users,email',
                'password' => "required"
            ]
        );
        
        $n=0;
        foreach ($users as $user) {
            if ($user->email == $req->user){
                break;}
            else
                $n=$n+1;
        }

        $pass = $users[$n]->password;
        $req->request->add(['password_new' => md5($req->password)]);
        $req->request->add(['password_old' => $pass]);

        $req->validate(
            [
                'password_new' => "required|same:password_old"
            ]
        );
        
        session($users[$n]->toArray());
        return view('home');
    }
}
