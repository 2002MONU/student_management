 @extends('layout.app')
 @section('content')

    <main class="main-content">
      <div class="position-relative">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar border-bottom pb-lg-3  pt-lg-3 ">
          <div class="container-fluid navbar-inner">
            <a href="index-2.html" class="navbar-brand">
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                 <svg width="20px" height="20px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
                </i>
            </div>
              <h4 class="title">
                Admin
              </h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto navbar-list mb-2 mb-lg-0 align-items-center">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="search-drop" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                          </svg>
                    </a>
                    <ul class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="search-drop">
                      <li class="">
                          <div class="p-3 card-header justify-content-between border-bottom rounded-top">
                            <div class="header-title">
                                <div class="iq-search-bar device-search  position-relative">
                                      <form action="#" class="searchbox">
                                        <input type="text" class="text search-input form-control" placeholder="Search here...">
                                        <a class="d-lg-none d-flex" href="javascript:void(0);">
                                            <span class="material-symbols-outlined">search</span>
                                        </a>
                                      </form>
                                </div>
                            </div>
                          </div>
                         
                      </li>  
                    </ul>  
                </li>
               
              
                <li class="nav-item dropdown">
                  <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{url('assets/images/avatars/01.png')}}" alt="User-Profile" class="img-fluid avatar avatar-50 avatar-rounded">
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li class="border-0"><a class="dropdown-item" href="#">Profile</a></li>
                    <li class="border-0"><a class="dropdown-item" href="#">Privacy Setting</a></li>
                    <li class="border-0"><hr class="m-0 dropdown-divider"></li>
                    <li class="border-0"><a class="dropdown-item" href="{{route('admin.logout')}}">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>        <!--Nav End-->
      </div>
      <div class="container-fluid content-inner pb-0">
<div class="row mb-4">
   <div class="col-lg-12">
         <div class="row align-items-center">
            <div class="col-xl-12 d-none d-md-block">
               <div class="card mb-0">
                  <div class="card-body ">
                     <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex">
                           <img src="{{url('assets/images/coins/06.png')}}" class="img-fluid avatar avatar-40 avatar-rounded" alt="img8">
                           <div class="dropdown mt-2 ms-2">
                              <a href="#" class="text-white" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                 <span class="mt-2">Litecoin</span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                 </svg>
                              </a>
                              <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                 <li><a href="#" class="dropdown-item"><img src="{{url('assets/images/coins/01.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img71"> 561,511 Btc</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="{{url('assets/images/coins/06.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img72"> 561,511 Ltc</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="{{url('assets/images/coins/03.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img73"> 561,511 Eth</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="{{url('assets/images/coins/08.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img74"> 561,511 Xmr</a></li>
                              </ul>
                           </div>                    
                           <div class="dropdown mt-2 ms-2">
                              <a href="#" class="text-white" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                 <span class="mt-2 ">BTC/USD</span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                 </svg>
                              </a>
                              <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton2">
                                 <li><a href="#" class="dropdown-item"><img src="{{url('assets/images/coins/01.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img71"> 561,511 Btc</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="{{url('assets/images/coins/06.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img72"> 561,511 Ltc</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="{{url('assets/images/coins/03.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img73"> 561,511 Eth</a></li>
                                 <li><a href="#" class="dropdown-item"><img src="{{url('assets/images/coins/08.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img74"> 561,511 Xmr</a></li>
                              </ul>
                           </div> 
                        </div>
                        <div class="d-none d-lg-block w-50">
                           <div class="d-flex justify-content-evenly flex-1">
                              <span class=" text-primary">
                                 37,390.00<br>
                                 <small>$37,390.00</small>
                              </span>
                              <span class=" text-primary">
                                 129.51+0.8%<br>
                                 <small>24th changes</small>
                              </span>
                              <span class="">
                                 37,440.01<br>
                                 <small>24th high</small>
                              </span>
                              <span class="">
                                 37,327.30<br>
                                 <small>24th low</small>
                              </span>
                              <span class="d-none">
                                 37,390.00<br>
                                 <small>24th volume(BTC)</small>
                              </span>                     
                           </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                           <span class="">
                              <svg width="32" height="32" viewBox="0 0 34 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect x="6" width="1" height="53" rx="0.5" fill="white"/>
                              <rect x="0.5" y="9.5" width="12" height="34" rx="1.5" fill="#202022"/>
                              <rect x="0.5" y="9.5" width="12" height="34" rx="1.5" stroke="white"/>
                              <rect x="27" width="1" height="53" rx="0.5" fill="white"/>
                              <rect x="21.5" y="13.5" width="12" height="25" rx="1.5" fill="#202022"/>
                              <rect x="21.5" y="13.5" width="12" height="25" rx="1.5" stroke="white"/>
                              </svg>
                           </span>
                           <a href="#" class="bg-secondary rounded-1 p-2 ms-2">
                              <svg width="26" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M26.3875 14.1244L16.8484 23.7653L5.99906 16.9795C4.44458 16.0069 4.76794 13.6457 6.5262 13.1315L32.2854 5.58795C33.8954 5.11605 35.3876 6.62138 34.9093 8.23666L27.2885 33.9779C26.7664 35.7387 24.4187 36.0533 23.4553 34.4921L16.8433 23.767" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>     
            </div>      
           
         </div>
   </div>
</div>
<div class="row pt-2">
   <div class="col-lg-12">
      <div class="row">
         <div class="col-lg-12">
            <div class="row">
               <div class="col-lg-4">
                  <div class="card shining-card">
                     <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                           <div class="d-flex align-items-center gap-2">
                              <img src="{{url('assets/images/coins/01.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img60"> 
                              <span class="fs-5 me-2">Bitcoin</span>
                              <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534" stroke="#1aa053" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z" fill="#1aa053" stroke="#1aa053"/>
                              </svg>
                           </div>
                           <div class="dropdown">
                              <a href="#" class="text-gray" id="dropdownMenuButton36" data-bs-toggle="dropdown" aria-expanded="true">
                                 <svg width="22" height="5" viewBox="0 0 22 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z" fill="#B3B3B7"></path>
                                 </svg>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton36" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 23px);" data-popper-placement="bottom-end">
                              <li><a class="dropdown-item" href="#">This Week</a></li>
                              <li><a class="dropdown-item" href="#">This Month</a></li>
                              <li><a class="dropdown-item" href="#">This Year</a></li>
                              </ul>
                           </div>
                           
                        </div>                    
                        <div class="pt-3">
                           <h4 class="counter" style="visibility: visible;"> </h4>
                           
                        </div>
                     </div>            
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card shining-card">
                     <div class="card-body">                    
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                           <div class="d-flex align-items-center gap-2">
                              <img src="{{url('assets/images/coins/06.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img60"> 
                              <span class="fs-5 me-2">Dash</span>
                              <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534" stroke="#1aa053" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z" fill="#1aa053" stroke="#1aa053"/>
                              </svg>
                           </div>
                           <div class="dropdown">
                              <a href="#" class="text-gray" id="dropdownMenuButton36" data-bs-toggle="dropdown" aria-expanded="true">
                                 <svg width="22" height="5" viewBox="0 0 22 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z" fill="#B3B3B7"></path>
                                 </svg>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton36" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 23px);" data-popper-placement="bottom-end">
                              <li><a class="dropdown-item" href="#">This Week</a></li>
                              <li><a class="dropdown-item" href="#">This Month</a></li>
                              <li><a class="dropdown-item" href="#">This Year</a></li>
                              </ul>
                           </div>
                           
                        </div>  
                        <div class="progress-detail pt-3">
                           <h4 class="counter" style="visibility: visible;">$2,138.87</h4>
                           <div class="pt-3">
                              <small class="text-success">+ 0.8%</small>
                              <small class="ms-2">(LTC/USDT)</small>
                           </div>
                        </div>
                     </div>            
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card shining-card">
                     <div class="card-body">                    
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                           <div class="d-flex align-items-center gap-2">
                              <img src="{{url('assets/images/coins/03.png')}}" class="img-fluid avatar avatar-30 avatar-rounded" alt="img60"> 
                              <span class="fs-5 me-2">Etherum</span>
                              <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M3.86124 21.6224L11.2734 16.8577C11.6095 16.6417 12.041 16.6447 12.3718 16.8655L18.9661 21.2663C19.2968 21.4871 19.7283 21.4901 20.0644 21.2741L27.875 16.2534" stroke="#1aa053" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M26.7847 13.3246L31.6677 14.0197L30.4485 18.7565L26.7847 13.3246ZM30.2822 19.4024C30.2823 19.4023 30.2823 19.4021 30.2824 19.402L30.2822 19.4024ZM31.9991 14.0669L31.9995 14.0669L32.0418 13.7699L31.9995 14.0669C31.9994 14.0669 31.9993 14.0669 31.9991 14.0669Z" fill="#1aa053" stroke="#1aa053"/>
                              </svg>
                           </div>
                           <div class="dropdown">
                              <a href="#" class="text-gray" id="dropdownMenuButton36" data-bs-toggle="dropdown" aria-expanded="true">
                                 <svg width="22" height="5" viewBox="0 0 22 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z" fill="#B3B3B7"></path>
                                 </svg>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton36" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 23px);" data-popper-placement="bottom-end">
                              <li><a class="dropdown-item" href="#">This Week</a></li>
                              <li><a class="dropdown-item" href="#">This Month</a></li>
                              <li><a class="dropdown-item" href="#">This Year</a></li>
                              </ul>
                           </div>
                           
                        </div>
                        <div class="progress-detail pt-3">
                           <h4 class="counter" style="visibility: visible;">$34.850,10</h4>
                           <div class="pt-3">
                              <small class="text-success">+ 0.8%</small>
                              <small class="ms-2">(ETH/USDT)</small>
                           </div>
                        </div>
                     </div>            
                  </div>
               </div>
               
             
            </div>
         </div>
        
        
      </div>
   </div>
  
</div>

      </div>
     
     
    <!-- Wrapper End-->
   
    @endsection
