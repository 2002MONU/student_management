<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // return $request;
        if (auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])) {
            $user = auth()->guard('admin')->user();
            return redirect('admin/dashboard')->with('success', 'You are Logged in sucessfully.');
        } else {
            return back()->with('error', 'oops! invalid email and password.');
        }
    }

    public function dashboard()
    {
        if (auth()->guard('admin')) {
            return view('auth.dashboard');
        }

        return redirect("login")->with('error', 'Opps! You do not have access');
    }

    public function logout() {
        auth()->guard('admin')->logout();
        Session::flush(); 
        return redirect('admin/login')->with('success', "Logout Successfully");
    }
}
