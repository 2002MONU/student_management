<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function userlogin(){
        return view('user.userlogin');
      }

   

      public function userslogin(Request $request)
      {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
         $user = $request->only('email','password');
         if(Auth::attempt($user)){
          
            return redirect('userdashboard')->with('success',"You have  Successfully login");
         }

         return redirect('userslogin')->with('error',"Opps! You have entered invalid Details");
        }


        public function usershow($id)
        {
          $userdata = User::find($id);
          return view('admin/userdeatil',compact('userdata'));
        }

        public function userdashboard()
        {
          if(Auth::check())
          {
            $userdata = User::find(Auth::user()->id);
          return view('user.userdashboard',compact('userdata'));
          }
        return redirect('userslogin')->with('error','Please Login First');
      }
   

      public function delete($id)
      {
        User::where('id','=',$id)->delete();
        return redirect('register')->with('success','Delete Successfully');
      }

      public function logout()
      {
        Session::flush();
        Auth::logout();
        return redirect('userslogin')->with('success','Logout Successfully');
      }



      public function edit($id)
      {
        $users = User::find($id);
        return view('user.updateuser',[
          'users' => $users,
          'technologies' => json_decode($users->technologies),
          'hobbies' => json_decode($users->hobbies)
      ]);
      }
     
      public function userupdate(Request $request,$id)
      {
           $request->validate([
            'name' => 'required',
            'email' => 'required',
            'city' => 'required',
            'gender' => 'required',
            'hobbies' => 'required',
            'technologies' => 'required',
            'userimage' =>'required|userimage|mimes:png,jpg,jpeg'
            
           ]);
           $users = User::find($id);
           if($request->hasFile('userimage'))
           {
            $file = $request->file('userimage');
            $name = $file->getClientOriginalName();
            $file->move('user-image', $name);
            $users->userimage = $name;
           }
       
 
         $users->name = $request->name;
         $users->email = $request->email;
         if($request->password)
          {
          $users->password = Hash::make($request->password);
          }
         $users->city = $request->city;
         $users->gender = $request->gender;
         $users->hobbies = $request->hobbies;
         $users->technologies = $request->technologies;
     
         $users->save();
         return redirect('userdashboard')->with('success','Update Successfully');
      }
    
}
