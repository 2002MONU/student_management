@extends('layout.app')
@section('title') {{'About Details'}} @endsection
@section('content')
<main class="main-content">
<div class="position-relative">
<div class="container-fluid content-inner pb-0">
<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div class="card-header d-flex justify-content-between border-0">
            <div class="header-title ">
               <h4 class="card-title">About  Details</h4>
               @if(Session('success'))
               <div class="alert alert-success" role="alert">
                {{session('success')}}
               </div>
             @endif
            </div>
            <div class="header-title "> 
               <a href="{{url('about')}}" class="btn btn-info">Add About</a>
            </div>
         </div>
         <div class="card-body p-0">
            <div class="table-responsive">
               <table class="table">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Heading</th>
                        <!-- <th>Description</th> -->
                        <!-- <th>Paragraph</th> -->
                        <th>Our Travellers</th>
                        <th>Monthly Bookings</th>
                        <th>Completed Trips</th>
                        <th>Status</th>
                        <th>Top Image</th>
                        <th>Bottom Image</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                     @foreach($abouts as $about)
                     <tr>
                        <th>{{$about->id}}</th>
                        <td>{{$about->title}}</td>
                        <td>{{$about->heading}}</td>
                        <!-- <td>{{$about->description}}</td> -->
                        <!-- <td>{{$about->paragraph}}</td> -->
                        <td>{{$about->traveller}}</td>
                        <td>{{$about->mbooking}}</td>
                        <td>{{$about->ctrip}}</td>
                        <td>{{$about->status}}</td>
                        <th><a href="{{asset('web_assets/aboutimages/'.$about->topimage)}}" target="_blank">
                           <img src="{{asset('web_assets/aboutimages/'.$about->topimage)}}" style="width:30px;height:30px;"></a></th>
                           <th><a href="{{asset('web_assets/aboutimages/'.$about->bottomimage)}}" target="_blank">
                           <img src="{{asset('web_assets/aboutimages/'.$about->bottomimage)}}" style="width:30px;height:30px;"></a></th>
                        <td><a href="{{url('aboutupdate',['id' => $about->id])}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></td>
                        
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection