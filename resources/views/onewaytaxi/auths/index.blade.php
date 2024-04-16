@extends('onewaytaxi.layouts.apps')
@section('title') {{'Home'}} @endsection
 @section('maincontent')

<div class="main">
        <!--hero section start-->
        <!--hero section start-->
        <section class="position-relative ptb-100" style="background-image: url('webassets/images/bg.png');">
            <div class="fit-cover background-image-wraper position-absolute"></div>
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-12 col-lg-6">
                        <div class="section-heading py-5">
                            <h6 class="text-uppercase color-accent mb-1">{{ $homes->title }}</h6>
                            <h1 class="font-weight-bolder display-4">{{ $homes->heading }}</h1>
                            <p class="lead">{{ $homes->description }}</p>
                            <div class="action-btns mt-3">
                                <a href="#"><img src="{{asset('webassets/images/google.png')}}" alt="" width="28%"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="hero-image-wrap">
                            <div class="content-img-wrap">
                                <img class="hero-img-width img-custom-width img-fluid gray-light-bg z--1" src="{{asset('web_assets/homeimages/'.$homes->image)}}" alt="modern desk">
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--hero section end-->
        <!--hero section end-->
        <!--about section start-->
        <section id="about" class="about-new-section ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7 pr-lg-5 order-md-1 order-lg-0">
                        <div class="image-overlap">
                            <div class="image-overlap-item">
                                <img src="{{asset('web_assets/aboutimages/'.$about->topimage)}}" alt="about" class="img-fluid rounded-custom shadow-sm">
                                
                            </div>
                            <div class="image-overlap-item">
                                <img src="{{asset('web_assets/aboutimages/'.$about->bottomimage)}}" alt="about" class="img-fluid rounded-custom shadow-lg">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5 mb-5 mb-md-5 mb-lg-0">
                        <div class="about-content-wrap">
                            <h6 class="text-uppercase color-accent mb-1">{{$about->title}}</h6>
                            <h2>{{$about->heading}}</h2>
                            <p>{{$about->description}}</p>
                            <p>{{$about->paragraph}} </p>
                            <ul class="list-inline text-counter-list">
                                <li class="list-inline-item my-2">
                                    <h3 class="mb-1 font-weight-bolder color-accent">{{$about->traveller}}</h3>
                                    <span>Our Travellers</span>
                                </li>
                                <li class="list-inline-item my-2">
                                    <h3 class="mb-1 font-weight-bolder color-accent">{{$about->mbooking}}</h3>
                                    <span>Monthly Bookings</span>
                                </li>
                                <li class="list-inline-item my-2">
                                    <h3 class="mb-1 font-weight-bolder color-accent">{{$about->ctrip}}</h3>
                                    <span>Completed Trips</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about section end-->
        <!--promo section start-->
        <section class="service-promo ptb-100 gray-light-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-12">
                        <div class="about-content-wrap">
                            <h6 class="text-uppercase color-accent mb-1">choose us</h6>
                            <h2>Why Choose us</h2>
                        </div>
                        <div class="row">
                            @foreach($whychose as $why)
                            <div class="col-12 col-sm-6 col-md-12 col-lg-3">
                                <div class="card border-0 single-promo-card single-promo-hover text-center p-2 mt-4">
                                    <div class="card-body">
                                        <div class="pb-2">
                                           <img src="{{asset('web_assets/whychoose/'.$why->image)}}" alt="" style="width:100px;height:100px;">
                                        </div>
                                        <div class="pt-2 pb-3">
                                            <h5>{{$why->heading}}</h5>
                                            <p class="mb-0">{{$why->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12 col-sm-6 col-md-12 col-lg-3">
                                <div class="card border-0 single-promo-card single-promo-hover text-center p-2 mt-4">
                                    <div class="card-body">
                                        <div class="pb-2">
                                            <span><i class="fas fa-money-bill-wave"></i></span>
                                        </div>
                                        <div class="pt-2 pb-3">
                                        <h5>{{$why->heading}}</h5>
                                            <p class="mb-0">{{$why->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-12 col-lg-3">
                                <div class="card border-0 single-promo-card single-promo-hover text-center p-2 mt-4">
                                    <div class="card-body">
                                        <div class="pb-2">
                                            <span><i class="fas fa-clock"></i></span>
                                        </div>
                                        <div class="pt-2 pb-3">
                                        <h5>{{$why->heading}}</h5>
                                            <p class="mb-0">{{$why->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-12 col-lg-3">
                                <div class="card border-0 single-promo-card single-promo-hover text-center p-2 mt-4">
                                    <div class="card-body">
                                        <div class="pb-2">
                                            <span><i class="fas fa-headset"></i></span>
                                        </div>
                                        <div class="pt-2 pb-3">
                                        <h5>{{$why->heading}}</h5>
                                            <p class="mb-0">{{$why->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--promo section end-->
        <!--screenshots section start-->
        <section id="screenshots" class="screenshots-section ptb-100  ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Apps Screenshots</h2>
                            <p>Proactively impact value-added channels via backend leadership skills. Efficiently revolutionize worldwide networks whereas strategic catalysts for change. </p>
                        </div>
                    </div>
                </div>
                <!--start app screen carousel-->
                <div class="screenshot-wrap">
                    <div class="screen-carousel owl-carousel owl-theme dot-indicator">
                        <img src="{{url('webassets/images/1.png')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{url('webassets/images/2.png')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{url('webassets/images/3.png')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{url('webassets/images/4.png')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{url('webassets/images/5.png')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{url('webassets/images/6.png')}}" class="img-fluid" alt="screenshots" />
                    </div>
                </div>
                <!--end app screen carousel-->
            </div>
        </section>
         <!--pricing section start-->
         <section id="pricing" class="pricing-section ptb-100 " style="background-image: url('webassets/images/bg.png');">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-4">
                            <h2>Our Flexible Price</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-md-center justify-content-center">
                    @foreach($prices as $price)
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="text-center bg-white single-pricing-pack mt-4">
                            <div class="price-img pt-4">
                                <img src="{{asset('web_assets/priceimages/'.$price->image)}}" alt="price" width="250" class="img-fluid">
                            </div>
                            <div class="py-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price color-secondary" style="display: block;">₹{{$price->price}}</div>
                                <div class="price text-center mb-0 yearly-price color-secondary" style="display: none;">₹800<span>.00</span></div>
                            </div>
                            <div class="price-name">
                                <h5 class="mb-0">{{$price->time}}</h5>
                            </div>
                            <div class="pricing-content">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <p>{{$price->paragraph}}</p>
                                </ul>
                                <a href="#" class="btn btn-outline-brand-02 btn-rounded mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="popular-price bg-white text-center single-pricing-pack mt-4">
                            <div class="price-img pt-4">
                                <img src="{{('webassets/images/daimond.png')}}" alt="price" width="250" class="img-fluid">
                            </div>
                            <div class="py-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price color-secondary" style="display: block;">₹{{$price->price}}</div>
                                <div class="price text-center mb-0 yearly-price color-secondary" style="display: none;">₹3000<span>.00</span></div>
                            </div>
                            <div class="price-name">
                                <h5 class="mb-0">{{$price->time}}</h5>
                            </div>
                            <div class="pricing-content">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                <p>{{$price->paragraph}}</p>
                                </ul>
                                <a href="#" class="btn btn-brand-02 btn-rounded mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="text-center bg-white single-pricing-pack mt-4">
                            <div class="price-img pt-4">
                                <img src="{{('webassets/images/gold.png')}}" alt="price" width="250" class="img-fluid">
                            </div>
                            <div class="py-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price color-secondary" style="display: block;">₹{{$price->price}}</div>
                                <div class="price text-center mb-0 yearly-price color-secondary" style="display: none;">₹1300<span>.00</span></div>
                            </div>
                            <div class="price-name">
                                <h5 class="mb-0">{{$price->time}}</h5>
                            </div>
                            <div class="pricing-content">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    {{$price->paragraph}}
                                </ul>
                                <a href="#" class="btn btn-outline-brand-02 btn-rounded mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div> -->
                    @endforeach
                </div>
            </div>
        </section>
        <!--pricing section end-->

        <!--our contact section start-->
        <section id="contact" class="contact-us-section ptb-100">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-12 pb-3 message-box d-none">
                        <div class="alert alert-danger"></div>
                    </div>
                    <div class="col-md-12 col-lg-5 mb-5 mb-md-5 mb-sm-5 mb-lg-0">
                        <div class="contact-us-form gray-light-bg rounded p-5">
                            <h4>Ready to get started?</h4>
                            @if (session('success'))
                             <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                            @endif
                            <form  class="contact-us-form" method="POST" action="{{url('usrmsg')}}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Enter name" required="required">
                                            @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                             @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Enter email" required="required">
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                             @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message....."></textarea>
                                            @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                             @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <button type="submit" name="sumbit" class="btn btn-brand-02" id="btnContactUs">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="contact-us-content">
                            <h2>Looking for a trip partner?</h2>
                            <p class="lead">Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days.</p>

                            <a href="#" class="btn btn-outline-brand-01 align-items-center">Get Directions <span class="ti-arrow-right pl-2"></span></a>

                            <hr class="my-5">

                            <ul class="contact-info-list">
                                <li class="d-flex pb-3">
                                    <div class="contact-icon mr-3">
                                        <span class="fas fa-location-arrow color-primary rounded-circle p-3"></span>
                                    </div>
                                    <div class="contact-text">
                                        <h5 class="mb-1">Company Location</h5>
                                        <p>
                                            {{$location->location}}
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex pb-3">
                                    <div class="contact-icon mr-3">
                                        <span class="fas fa-envelope color-primary rounded-circle p-3"></span>
                                    </div>
                                    <div class="contact-text">
                                        <h5 class="mb-1">Email Address</h5>
                                        <p>
                                            {{$location->email}}
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our contact section end-->
    </div>

@endsection
