<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\Users;


class FacebookSocialiteController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
       
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        try {     
            $user = Socialite::driver('facebook')->user();
            $finduser = Users::where('social_id', $user->id)->first();
            if($finduser){      
                session($finduser->toArray());
                return redirect('home');
            }else{              
                $usr = new Users;
                $usr->u_name = $user->name;
                $usr->email = $user->email;
                $usr->social_id = $user->id;
                $usr->social_type = 'facebook';
                $usr->password = md5('my-facebook');
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
