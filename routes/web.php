  <?php

  use Illuminate\Support\Facades\Route;
  use App\Http\Controllers\AuthContoller;
  use App\Http\Controllers\UserController;
  use App\Http\Controllers\AdminAuthController;
  use App\Http\Controllers\HomeController;
  use App\Http\Controllers\Website\WebsiteHomeController;
  use App\Http\Controllers\ForgotPasswordController;
  use App\Http\Controllers\Auth\SocialiteController;


  /*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
  */

  Route::get('/',[WebsiteHomeController::class,'index']);

  Route::get('/register',[AuthContoller::class,'index']);
  Route::post('/registerstore',[AuthContoller::class,'register']);


  Route::get('/dashboard',[AuthContoller::class,'dashboard']);
  //  Route::group(['middleware' => ['auth']], function() {
  //     Route::get('/logout',[AuthContoller::class,'logout'])->name('logout');
  //  });
  // admin update
  Route::get('admin/user_delete/{id}',[AuthContoller::class,'destroy'])->middleware('is_admin');
  Route::get('/updateadmin/{id}',[AuthContoller::class,'useredit'])->middleware('is_admin');
  Route::post('/adminupdate/{id}',[AuthContoller::class,'update']);

    //user login 
  Route::get('/userslogin',[UserController::class,'userlogin']);
  Route::post('/users-login',[UserController::class,'userslogin'])->name('users-login');
  Route::get('/userdashboard',[UserController::class,'userdashboard']);
  Route::get('/userdetail',[UserController::class,'usershow']);

  

  Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
      Route::get('/login', [AdminAuthController::class, 'getLogin']);
      Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('admin.login');
      Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
  
      Route::group(['middleware' => 'is_admin'], function () {
          Route::get('/dashboard', function () {
              return view('auth.dashboard');
          });
          Route::get('/userdetails',[AuthContoller::class,'show']);
      });
  });


     // Route::get('delete_user/{id}',[UserController::class,'delete']);
    // Route::get('dashboard',[AdminAuthController::class,'dashboard']);
    //user logout
    Route::group(['middleware' => ['auth']], function() {
        Route::get('/logout',[UserController::class,'logout'])->name('logout');
      });
    
    //user update 
      Route::get('/updateuser/{id}',[UserController::class,'edit']);
      Route::post('/updateuser/{id}',[UserController::class,'userupdate']);


  // website index some page  views 
    Route::get('/privacy',[HomeController::class,'privacy']);
    Route::get('/terms',[HomeController::class,'terms']);
    Route::get('/return',[HomeController::class,'return']);
    Route::get('/refund',[HomeController::class,'refund']);
  //    Route::get('/',[HomeController::class,'main']);

  //Home details
      Route::get('/addhome',[HomeController::class,'home'])->middleware('is_admin');
      Route::post('/homeadd',[HomeController::class,'homestore'])->middleware('is_admin');
      // abouts details 
      Route::get('/about',[HomeController::class,'about'])->middleware('is_admin');
      Route::post('/addabout',[HomeController::class,'aboutstore'])->middleware('is_admin');
      // Why Choose US DEtails 
      Route::get('/whychoose',[HomeController::class,'whychoose'])->middleware('is_admin');
      Route::post('/why',[HomeController::class,'whystore'])->middleware('is_admin');

    // Our Prices details
      Route::get('/price',[HomeController::class,'price']);// add prices
      Route::post('/add-price',[HomeController::class,'pricestore']); // add price

      // All User Show details

      Route::get('/homedetails',[HomeController::class,'homedetail'])->middleware('is_admin');// home details 
      Route::get('/aboutdetails',[HomeController::class,'aboutdetails'])->middleware('is_admin');// about details
      Route::get('/whydetails',[HomeController::class,'whydetails'])->middleware('is_admin');//why choose us details
      Route::get('/ourpricedetails',[HomeController::class,'ourpricedetails'])->middleware('is_admin'); // Our Prices details 



  // Update Home Page routes

  Route::get('/homeupdate/{id}',[HomeController::class,'homeupdate'])->middleware('is_admin');
  Route::post('/hupdate/{id}',[HomeController::class,'updatehome'])->middleware('is_admin');

  // About update  section  routes 
  Route::get('/aboutupdate/{id}',[HomeController::class,'aboutupdate'])->middleware('is_admin');
  Route::post('/aupdate/{id}',[HomeController::class,'updateabout'])->middleware('is_admin');

  // Why Choose Us Update routes
  Route::get('/whyupdate/{id}',[HomeController::class,'whyupdate'])->middleware('is_admin');
  Route::post('/wupdate/{id}',[HomeController::class,'updatewhy'])->middleware('is_admin');
  
  // Our Prices update here routes

  Route::get('/priceupdate/{id}',[HomeController::class,'priceupdate'])->middleware('is_admin');
  Route::post('/pupdate/{id}',[HomeController::class,'updateprice'])->middleware('is_admin');

  // user message 
  Route::post('/usrmsg',[HomeController::class,'usermessage']);
  Route::get('/showmessage',[WebsiteHomeController::class,'messageshow'])->middleware('is_admin');


    // change password
  Route::get('/change-password', [WebsiteHomeController::class, 'changePassword']);
  Route::post('/changePassword', [WebsiteHomeController::class, 'changePasswordSave']);

  // reset password
  Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm']);
  Route::post('forgetpassword', [ForgotPasswordController::class, 'showForgetPassword']);

  Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
  Route::post('resetpassword', [ForgotPasswordController::class, 'submitResetPasswordForm']);


//   Route::prefix('google')->name('google.')->group( function(){
//     Route::get('login', [SocialiteController::class, 'loginWithGoogle'])->name('login');
//     Route::any('callback', [SocialiteController::class, 'callbackFromGoogle'])->name('callback');
// });

Route::get('/showlocation', [WebsiteHomeController::class, 'showlocation'])->middleware('is_admin');
Route::get('/locationupdate/{id}', [WebsiteHomeController::class, 'locationupdate'])->middleware('is_admin');
Route::post('/uplocation/{id}', [WebsiteHomeController::class, 'updatelocation'])->middleware('is_admin');