<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Providers\RouteServiceProvider;

class SocialiteController extends Controller
{
    
    // public function loginWithGoogle()
    // {
    //     return Socialite::driver('google')->redirect();
    // }

    // public function callbackFromGoogle()
    // {
    //     try {
    //         $user = Socialite::driver('google')->user();

    //         // Check Users Email If Already There
    //         $is_user = User::where('email', $user->getEmail())->first();
    //         if(!$is_user){
    //              $saveUser = User::updateOrCreate([
    //                 'google_id' => $user->getId(),
    //             ],[
    //                 'name' => $user->getName(),
    //                 'email' => $user->getEmail(),
    //                 'password' => Hash::make($user->getName().'@'.$user->getId())
    //             ]);
    //         }else{
    //             $saveUser = User::where('email',  $user->getEmail())->update([
    //                 'google_id' => $user->getId(),
    //             ]);
    //             $saveUser = User::where('email', $user->getEmail())->first();
    //         }


    //         Auth::loginUsingId($saveUser->id);

    //        return redirect()->route('user/dashboard');
    //     } catch (\Throwable $th) {
    //         throw $th;
    //     }
    // }
}
