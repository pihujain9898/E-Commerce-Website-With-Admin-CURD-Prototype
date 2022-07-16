<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\Users;


class GoogleSocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
       
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        try {     
            $user = Socialite::driver('google')->user();
            $finduser = Users::where('social_id', $user->id)->first();
            if($finduser){      
                session($finduser->toArray());
                return redirect('home');
            }else{              
                $usr = new Users;
                $usr->u_name = $user->name;
                $usr->email = $user->email;
                $usr->social_id = $user->id;
                $usr->social_type = 'google';
                $usr->password = md5('my-google');
                $usr->save();
                $finduser = Users::where('social_id', $user->id)->first();
                session($finduser->toArray());
                return redirect('home');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
