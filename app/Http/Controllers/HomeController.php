<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\About;
use App\Models\Whychoose;
use App\Models\Ourprice;
use App\Models\Message;
use App\Models\Monu;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class HomeController extends Controller
{


  // index page 
  public function main()
  {
    return view('onewaytaxi.auths.index');
  }

  // privacy page view
  public function privacy()
  {
    return view('onewaytaxi.auths.privacy');
  }
  // terms and condition
  public function terms()
  {
    return view('onewaytaxi.auths.terms');
  }
  // return
  public function return()
  {
    return view('onewaytaxi.auths.return');
  }
  // refund 
  public function refund()
  {
    return view('onewaytaxi.auths.return');
  }


  // home page details sumbit
  public function home()
  {
    return view('onewaytaxi.addhome');
  }
  // home page details sumbit
  public function homestore(Request $request)
  {
    $request->validate([
      'title' => 'required|max:50',
      'heading' => 'required|max:50',
      'description' => 'required|max:300',
      'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
    ]);

    // home image sumbit
      $data = new Home;
      $img_ext = $request->file('image')->getClientOriginalExtension();
      $filename =  time() . '.' . $img_ext;
      $path = $request->file('image')->move(public_path('web_assets/homeimages'), $filename); //image save public folder
    

  
    $data->title = $request->title;
    $data->heading = $request->heading;
    $data->description = $request->description;
    $data->image =  $filename;
    $data->save();
    return redirect('addhome')->with('success', 'Home Page details sumbit successfullty');
  }
  // About details
  public function about()
  {
    return view('onewaytaxi.about');
  }

  // about details sumbit
  public function aboutstore(Request $request)
  {
    $request->validate([
      'title' => 'required|max:50',
      'heading' => 'required|max:50',
      'description' => 'required|max:300',
      'paragraph' => 'required|max:200',
      'topimage' => 'required|image|mimes:png,jpg,jpeg|max:2048',
      'bottomimage' => 'required|image|mimes:png,jpg,jpeg|max:2048',
      'traveller' => 'required',
      'mbooking' => 'required',
      'ctrip' => 'required',

    ]);

    $data = new About;
    // About Top image sumbit 
    
      $img_ext = $request->file('topimage')->getClientOriginalExtension();
      $file =  time() . '.' . $img_ext;
      $path = $request->file('topimage')->move(public_path('web_assets/aboutimages'), $file); //image save public folder
    
    //  About Bottom image
  
      $img_extension = $request->file('bottomimage')->getClientOriginalExtension();
      $filename =  time() . '.' . $img_extension;
      $pathimage = $request->file('bottomimage')->move(public_path('web_assets/aboutimages'), $filename); //image save public folder
    

    $data->title = $request->title;
    $data->heading = $request->heading;
    $data->description = $request->description;
    $data->paragraph = $request->paragraph;
    $data->topimage =  $filename;
    $data->bottomimage =  $file;
    $data->traveller = $request->traveller;
    $data->mbooking = $request->mbooking;
    $data->ctrip = $request->ctrip;
    $data->save();
    return redirect('about')->with('success','About US details sumbit successfullty');
  }

  // Why Choose Us Details
  public function whychoose()
  {
    return view('onewaytaxi.whychoose');
  }

  public function whystore(Request $request)
  {
    $request->validate([

      'heading' => 'required|max:50',
      'description' => 'required|max:200',
      'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
    ]);

    // why Choose US  image sumbit
    

     $data = new Whychoose;
      $img_ext = $request->file('image')->getClientOriginalExtension();
      $filename =  time() . '.' . $img_ext;
      $path = $request->file('image')->move(public_path('web_assets/whychoose'), $filename); //image save public folder
    

    $data->heading = $request->heading;
    $data->description = $request->description;
    $data->image =  $filename;
    $data->save();
    return redirect('whychoose')->with('success', 'Why Choose us details sumbit successfullty');
  }


  // Our Prices sumbit data
  public function price()
  {
    return view('onewaytaxi.addprice');
  }

  public function pricestore(Request $request)
  {
    $request->validate([
      'price' => 'required|max:50',
      'time' => 'required|max:50',
      'paragraph' => 'required|max:200',
      'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
    ]);

    // our price image sumbit
    
    $data = new Ourprice;
      $img_ext = $request->file('image')->getClientOriginalExtension();
      $filename =  time() . '.' . $img_ext;
      $path = $request->file('image')->move(public_path('web_assets/priceimages'), $filename); //image save public folder
    

    $data->price = $request->price;
    $data->time = $request->time;
    $data->paragraph = $request->paragraph;
    $data->image =  $filename;
    $data->save();
    return redirect('price')->with('success', 'Price details sumbit successfullty');
  }


  // home details show 

  public function homedetail()
  {
    $homes = Home::get();
    return view('onewaytaxi.users.homedetails', compact('homes'));
  }

  // about details show 
  public function aboutdetails()
  {
    $abouts = About::get();
    return view('onewaytaxi.users.aboutdetails', compact('abouts'));
  }
  // Why Choose us details show
  public function whydetails()
  {
    $whychoose = whychoose::get();
    return view('onewaytaxi.users.whydetails', compact('whychoose'));
  }
  // our Prices details show
  public function ourpricedetails()
  {
    $ourprices = Ourprice::get();
    return view('onewaytaxi.users.ourpricedetails', compact('ourprices'));
  }


  // home Details update data

  public function homeupdate($id)
  {
    $homes = Home::find($id);
    return view('onewaytaxi.homeupdate', compact('homes'));
  }


  public function updatehome(Request $request, $id)
  {
    $request->validate([
      'title'=>'required',
      'heading'=>'required',
      'description'=>'required',
      'image' =>'required|image|mimes:png,jpg,jpeg|max:2048',
    ]);
    


    // home image update here 
    $homes = Home::find($id);
    if($request->hasFile('image')){
    $file = $request->file('image');
    $name = $file->getClientOriginalName();
    $file->move('web_assets/homeimages', $name);
    $homes->image = $name;

    }
   
    $homes->title = $request->title;
    $homes->heading = $request->heading;
    $homes->description = $request->description;
    
    $homes->save();
    return redirect('homedetails')->with('success','Update Successfully');
  }

  // About details Update 

  public function aboutupdate($id)
  {
    $abouts = About::find($id);
    return view('onewaytaxi.aboutupdate', compact('abouts'));
  }

  public function updateabout(Request $request, $id)
  {
     
    $request->validate([
      'title' => 'required',
      'heading' => 'required',
      'description' => 'required',
      'paragraph' => 'required',
      'traveller' => 'required',
      'mbooking' => 'required',
      'ctrip' => 'required',
      'topimage' =>'required|topimage|mimes:png,jpg,jpeg|max:2048',
      'bottomimage' =>'required|topimage|mimes:png,jpg,jpeg|max:2048'
    ]);

    // about top image update here 
    $abouts = About::find($id);
    if($request->hasFile('topimage')){
      $file = $request->file('topimage');
      $name = $file->getClientOriginalName();
      $file->move('web_assets/aboutimages', $name);
      // About bottom image update here
      $filename = $request->file('bottomimage');
      $bottomname = $filename->getClientOriginalName();
      $filename->move('web_assets/aboutimages', $bottomname);
      $abouts->topimage = $name;
      $abouts->bottomimage = $bottomname;
    }
  
   
    $abouts->title = $request->title;
    $abouts->heading = $request->heading;
    $abouts->description = $request->description;
    $abouts->paragraph = $request->paragraph;
    $abouts->traveller = $request->traveller;
    $abouts->mbooking = $request->mbooking;
    $abouts->ctrip = $request->ctrip;
   
    $abouts->save();
    return redirect('aboutdetails')->with('success','Update Successfully');
  }

  // Why Choose Us Details Update
  public function whyupdate($id)
  {
    $whychoose = Whychoose::find($id);
    return view('onewaytaxi.whyupdate', compact('whychoose'));
  }

  public  function updatewhy(Request $request, $id)
  {
    $whychoose = Whychoose::find($id);
    if($request->hasFile('image')){
      $file = $request->file('image');
      $name = $file->getClientOriginalName();
      $file->move('web_assets/whychoose', $name);
      $whychoose->image = $name;
    }

    $whychoose->heading = $request->heading;
    $whychoose->description = $request->description;
    $whychoose->save();
    return redirect('whydetails')->with('success',"update Successfully");
  }

  //our prices update here function 

  public function priceupdate($id)
  {
    $prices = Ourprice::find($id);
    return view('onewaytaxi.priceupdate', compact('prices'));
  }

  public function updateprice(Request $request, $id)
  {
    $prices = Ourprice::find($id);
    if($request->hasFile('image')){
      $file = $request->file('image');
      $name = $file->getClientOriginalName();
      $file->move('web_assets/priceimages', $name);
      $prices->image = $name;
    }
   

    
    $prices->price = $request->price;
    $prices->time = $request->time;
    $prices->paragraph = $request->paragraph;
   

    $prices->save();
    return redirect('ourpricedetails')->with('success','Update Succesfully');
  }

// user message
  public function usermessage(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required',
      'message' => 'required|max:200',
    ]);

    $message = new Message();
    $message->name = $request->name;
    $message->email = $request->email;
    $message->message = $request->message;
    $message->save();

    return redirect('/')->with('success','Message Sent Successfully');
  }


  
}
