<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; 
use App\Models\User;

class ForgotPasswordController extends Controller
{
  public function showForgetPasswordForm (){
    return view('forget-password');
  }

  public function showForgetPassword(Request $request){
   
       $request->validate([
        'email' => 'required|email|exists:users',
       ]);
       
       $token = str::random(64);

       DB::table('password_resets')->insert([
        'email' => $request->email, 
        'token' => $token, 
        'created_at' => Carbon::now(),
      ]);

        
      Mail::send('email.forgetPassword', ['token' => $token], function($message) use($request){
        $message->to($request->email);
        $message->subject('Reset Password');
    });

    return back()->with('message', 'We have e-mailed your password reset link!');
  }

  public function showResetPasswordForm($token){
    return view('email.forgetPasswordLink', ['token' => $token]);
  }


  public function submitResetPasswordForm(Request $request)
  {
   
      $request->validate([
          'email' => 'required|email|exists:users',
          'password' => 'required|string|confirmed|max:8',
          'password_confirmation' => 'required'
      ]);

      $updatePassword = DB::table('password_resets')
                          ->where([
                            'email' => $request->email, 
                            'token' => $request->token
                          ])
                          ->first();
      if(!$updatePassword){
          return back()->withInput()->with('error', 'Invalid token!');
      }

      $user = User::where('email', $request->email)
                  ->update(['password' => Hash::make($request->password)]);

      DB::table('password_resets')->where(['email'=> $request->email])->delete();

      return redirect('userslogin')->with('message', 'Your password has been changed!');
  }
}
