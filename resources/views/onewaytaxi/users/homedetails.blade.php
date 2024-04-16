@extends('layout.app')
@section('content')
<main class="main-content">
<div class="position-relative">
<div class="container-fluid content-inner pb-0">
<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div class="card-header d-flex justify-content-between border-0">
            <div class="header-title "> 
               
               <h4 class="card-title">Home Details</h4>
               @if(Session('success'))
                 <div class="alert alert-success" role="alert">
                  {{session('success')}}
                 </div>
               @endif
            </div>
            <div class="header-title "> 
               <a href="{{url('addhome')}}" class="btn btn-info">Add Home</a>
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
                        <!-- <th>Status</th> -->
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                     @foreach($homes as $home)
                     <tr>
                        <th>{{$home->id}}</th>
                        <td>{{$home->title}}</td>
                        <td>{{$home->heading}}</td>
                        <!-- <td>{{$home->description}}</td> -->
                        <!-- <td>{{$home->status}}</td> -->
                        <th><a href="{{asset('web_assets/homeimages/'.$home->image)}}" target="_blank">
                           <img src="{{asset('web_assets/homeimages/'.$home->image)}}" style="width:30px;height:30px;"></a></th>
                        <td><a href="{{url('homeupdate',['id' => $home->id])}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        
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