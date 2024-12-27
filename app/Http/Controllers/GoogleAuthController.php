<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;
use Hash;

class GoogleAuthController extends Controller
{
    public function signin_google(){
        return socialite::driver('google')->redirect();
    }

    public function signin_google_callback(){
        try{
            $user = Socialite::driver('google')->user();

            $findUser = User::where('email',$user->email)->orWhere('google_id',$user->id)->first();

            if($findUser){
                Auth::login($findUser);
                if(is_null($findUser->address)){
                    return redirect()->intended('profile')->with(['warning'=>'Please set your profile before procedding.']);
                }
                return redirect()->intended('dashboard');
            }else{
                $newUser = User::create([
                    'name'=>$user->name,
                    'email'=>$user->email,
                    'google_id'=>$user->id,
                    'password'=>Hash::make('12345678'),
                    'is_active'=>1,
                    'profile_photo' =>'default.jpg'
                ]);

                Auth::login($newUser);

                if(is_null($newUser->address)){
                    return redirect()->intended('profile')->with(['warning'=>'Please set your profile before procedding.']);
                }
                return redirect()->intended('dashboard')->with(['success'=>'Logged in successfully.']);
            }
        }catch(Exception $e){
            return $e;
        }
    }
}
