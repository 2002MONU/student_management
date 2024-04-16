<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class AuthContoller extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'city' => 'required',
            'gender' => 'required',
            'hobbies' => 'required',
            'technologies' => 'required',
            'userimage' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        if ($request->hasFile('userimage')) {
            $img_ext = $request->file('userimage')->getClientOriginalExtension();
            $filename =  time() . '.' . $img_ext;
            $path = $request->file('userimage')->move(public_path('user-image'), $filename); //image save public folder
        }

        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;

        $data->password = Hash::make($request->password);

        $data->city = $request->city;
        $data->gender = $request->gender;
        $data->hobbies = $request->hobbies;
        $data->technologies = $request->technologies;
        $data->userimage = $filename;
        $data->save();
        return redirect('userslogin')->with('success', "User Register Successfully");
    }

    public function login()
    {
        return view('login');
    }

    public function adminlogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $admin = $request->only('email', 'password');
        if (Auth::attempt($admin)) {
            return redirect('dashboard')->with('success', "You have  Successfully login");
        }

        return redirect('login')->with('error', "Opps! You have entered invalid Details");
    }

    
    public function dashboard()
    {
        if (Auth::check()) {
            return view('auth.dashboard');
        }

        return redirect("admin/login")->withSuccess('Opps! You do not have access');
    }



    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login')->with('success', "Logout Successfully");
    }

    public function show()
    {
        $users = User::query()->orderBy('id', 'desc')->get();
        return view('userdetails', compact('users'));
    }

    public function destroy($id)
    {
        User::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Student delete successfully');
    }

    public function useredit($id)
    {
        $users = User::find($id);
        return view('update', [
            'users' => $users,
            'technologies' => json_decode($users->technologies),
            'hobbies' => json_decode($users->hobbies)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'hobbies' => 'required',
            'gender' => 'required',
            'city' => 'required',
            'technologies' => 'required',
        ]);

        $users = User::find($id);

        if ($request->hasFile('userimage')) {
            $file = $request->file('userimage');
            $name = $file->getClientOriginalName();
            $file->move('user-image', $name);
            $users->userimage = $name;
        }

        // if (file_exists(public_path($name =  $file->getClientOriginalName()))) 
        // {
        //     unlink(public_path($name));
        // };
        $users->name = $request->name;
        $users->email = $request->email;
        if ($request->password) {
            $users->password = Hash::make($request->password);
        }
        $users->city = $request->city;
        $users->gender = $request->gender;
        $users->hobbies = $request->hobbies;
        $users->technologies = $request->technologies;
        $users->save();
        return redirect('admin/userdetails')->with('success','Update Successfully');
    }
}
