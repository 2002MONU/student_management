
<!doctype html>
<html lang="en" data-bs-theme="dark">
  

<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield('title')</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{url('assets/images/favicon.ico')}}" >
      <link rel="stylesheet" href="{{url('assets/css/core/libs.min.css')}}">
      <link rel="stylesheet" href="{{url('assets/css/coinex.min862f.css?v=4.1.0')}}">
      <link rel="stylesheet" href="{{url('assets/css/custom.min862f.css?v=4.1.0')}}">
      <link rel="preconnect" href="https://fonts.googleapis.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  />
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">  </head>
  <body class=" ">
   
    <aside class="sidebar sidebar-default navs-rounded ">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="{{url('dashboard')}}" class="navbar-brand dis-none align-items-center">
                <img src="{{url('assets/images/logo.svg')}}" class="img-fluid "  alt="logo">           
                 <h4 class="logo-title m-0"></h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body p-0 data-scrollbar">
            <div class="navbar-collapse pe-3" id="sidebar">
                <ul class="navbar-nav iq-main-menu">
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="{{url('admin/dashboard')}}">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z"
                                        fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-special" role="button" aria-expanded="false" aria-controls="sidebar-special">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M13.3051 5.88243V6.06547C12.8144 6.05584 12.3237 6.05584 11.8331 6.05584V5.89206C11.8331 5.22733 11.2737 4.68784 10.6064 4.68784H9.63482C8.52589 4.68784 7.62305 3.80152 7.62305 2.72254C7.62305 2.32755 7.95671 2 8.35906 2C8.77123 2 9.09508 2.32755 9.09508 2.72254C9.09508 3.01155 9.34042 3.24276 9.63482 3.24276H10.6064C12.0882 3.2524 13.2953 4.43736 13.3051 5.88243Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.164 6.08279C15.4791 6.08712 15.7949 6.09145 16.1119 6.09469C19.5172 6.09469 22 8.52241 22 11.875V16.1813C22 19.5339 19.5172 21.9616 16.1119 21.9616C14.7478 21.9905 13.3837 22.0001 12.0098 22.0001C10.6359 22.0001 9.25221 21.9905 7.88813 21.9616C4.48283 21.9616 2 19.5339 2 16.1813V11.875C2 8.52241 4.48283 6.09469 7.89794 6.09469C9.18351 6.07542 10.4985 6.05615 11.8332 6.05615C12.3238 6.05615 12.8145 6.05615 13.3052 6.06579C13.9238 6.06579 14.5425 6.07427 15.164 6.08279ZM10.8518 14.7459H9.82139V15.767C9.82139 16.162 9.48773 16.4896 9.08538 16.4896C8.67321 16.4896 8.34936 16.162 8.34936 15.767V14.7459H7.30913C6.90677 14.7459 6.57311 14.4279 6.57311 14.0233C6.57311 13.6283 6.90677 13.3008 7.30913 13.3008H8.34936V12.2892C8.34936 11.8942 8.67321 11.5667 9.08538 11.5667C9.48773 11.5667 9.82139 11.8942 9.82139 12.2892V13.3008H10.8518C11.2542 13.3008 11.5878 13.6283 11.5878 14.0233C11.5878 14.4279 11.2542 14.7459 10.8518 14.7459ZM15.0226 13.1177H15.1207C15.5231 13.1177 15.8567 12.7998 15.8567 12.3952C15.8567 12.0002 15.5231 11.6727 15.1207 11.6727H15.0226C14.6104 11.6727 14.2866 12.0002 14.2866 12.3952C14.2866 12.7998 14.6104 13.1177 15.0226 13.1177ZM16.7007 16.4318H16.7988C17.2012 16.4318 17.5348 16.1139 17.5348 15.7092C17.5348 15.3143 17.2012 14.9867 16.7988 14.9867H16.7007C16.2885 14.9867 15.9647 15.3143 15.9647 15.7092C15.9647 16.1139 16.2885 16.4318 16.7007 16.4318Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">User Details Sumbit</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-special" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="{{url('admin/userdetails')}}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>                                 
                                    </i>
                                    <i class="sidenav-mini-icon">P </i>
                                    <span class="item-name">User Details</span>
                                </a>
                            </li>
                           
                          
                            <li class="nav-item">
                                <a class="nav-link " href="{{url('register')}}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>                          
                                    </i>
                                    <i class="sidenav-mini-icon"> W </i>
                                    <span class="item-name">Add User</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link " href="{{url('addhome')}}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>                         
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{url('about')}}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>                         
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">About</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="{{url('whychoose')}}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>                         
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">Why Choose Us</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{url('price')}}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>                         
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">Add Price</span>
                                </a>
                            </li> -->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-auth" role="button" aria-expanded="false" aria-controls="sidebar-user">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M12.0865 22C11.9627 22 11.8388 21.9716 11.7271 21.9137L8.12599 20.0496C7.10415 19.5201 6.30481 18.9259 5.68063 18.2336C4.31449 16.7195 3.5544 14.776 3.54232 12.7599L3.50004 6.12426C3.495 5.35842 3.98931 4.67103 4.72826 4.41215L11.3405 2.10679C11.7331 1.96656 12.1711 1.9646 12.5707 2.09992L19.2081 4.32684C19.9511 4.57493 20.4535 5.25742 20.4575 6.02228L20.4998 12.6628C20.5129 14.676 19.779 16.6274 18.434 18.1581C17.8168 18.8602 17.0245 19.4632 16.0128 20.0025L12.4439 21.9088C12.3331 21.9686 12.2103 21.999 12.0865 22Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M11.3194 14.3209C11.1261 14.3219 10.9328 14.2523 10.7838 14.1091L8.86695 12.2656C8.57097 11.9793 8.56795 11.5145 8.86091 11.2262C9.15387 10.9369 9.63207 10.934 9.92906 11.2193L11.3083 12.5451L14.6758 9.22479C14.9698 8.93552 15.448 8.93258 15.744 9.21793C16.041 9.50426 16.044 9.97004 15.751 10.2574L11.8519 14.1022C11.7049 14.2474 11.5127 14.3199 11.3194 14.3209Z"
                                        fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">User Details Show</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-auth" data-bs-parent="#sidebar">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('homedetails')}}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">Home Details Show </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('aboutdetails')}}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name"> About Details Show</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('whydetails')}}">
                                    <i class="icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg> 
                                    </i>
                                    <i class="sidenav-mini-icon"> R </i>
                                    <span class="item-name">Why Choose Details Show</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('ourpricedetails')}}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> R </i>
                                    <span class="item-name">Our Price Show </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{url('showlocation')}}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>                         
                                    </i>
                                    <i class="sidenav-mini-icon"> L </i>
                                    <span class="item-name">View Location</span>
                                </a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('showmessage')}}">
                                    <i class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5" width="16" viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="7.5" stroke="currentColor"></circle>                                                                    
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon"> R </i>
                                    <span class="item-name">Message Show </span>
                                </a>
                            </li>
                           </ul>
                    </li>
              </div>
    </aside>