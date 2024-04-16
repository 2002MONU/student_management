<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\About;
use App\Models\Location;
use App\Models\User;
use App\Models\Whychoose;
use App\Models\Ourprice;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Rules\CheckOldPassword;
use Illuminate\Http\Request;

class WebsiteHomeController extends Controller
{

   
    // all dynamics show data in index page 
    public function index() {
       
        $homes = Home::find(1);
        $about = About::find(1); 
        $whychose = Whychoose::get();
        $prices = Ourprice::get();
        $location = Location::find(1);
        return view('onewaytaxi.auths.index', compact('homes', 'about', 'whychose', 'prices', 'location'));
    }

    public function messageshow(){
        $messages = Message::get();
        return view('onewaytaxi.showmessage',compact('messages'));
    }
    // if(Auth::check()){
    //     $userdata = User::find(Auth::user()->id);
    //   return view('userdashboard',compact('userdata'));
    // }
    // return redirect('userslogin')->with('error','Please Login First');
    
    public function changePassword(){
        if(Auth::check()){
        $userdata = User::find(Auth::user()->id);
        return view('change-password' ,compact('userdata'));
        }
        return redirect('userslogin')->with('error','Please Login First');
    }

    public function changePasswordSave(Request $request){
        
       $request->validate([
        'old_password'=> 'required',
        'password' => 'required',
        'new_password_confirmation' => ['same:password'],
       ]);
       
    //   return $request;
         if(!Hash::check($request->old_password, auth()->user()->password)){
               return back()->with('error',"Current Password is invalid");
            }

            if (strcmp($request->get('old_password'), $request->password) == 0) 
            {
                return redirect()->back()->with("error", "New Password cannot be same as your current password.");
            }
            #Update the new Password
            User::find(auth()->user()->id)->update([
                'password' => Hash::make($request->password)
            ]);

            return back()->with("status", "Password changed successfully!");
            }
    
        public function showlocation(){
             $location = Location::find(1);
            return view("onewaytaxi.users.showlocation",compact('location'));
        }

        public function locationupdate($id){
            $location = Location::find($id);
            return view('onewaytaxi.users.locationupdate',compact('location'));
        }

        public function updatelocation(Request $request ,$id){
            $request->validate([
                'email' => 'required',
                'location' => 'required',
                'logo' => 'required|logo|mimes:png,jpg,jpeg'
            ]);
            $location = Location::find($id);
            if($request->hasFile('logo')){
                $file = $request->file('logo');
                $name = $file->getClientOriginalName();
                $file->move('web_assets/logoimage/', $name);
                $location->logo = $name;
            }
           
             $location->location = $request->location;
             $location->email = $request->email;
             $location->save();
             return redirect('showlocation')->with('success','Update Successfully');
        }
        

}


