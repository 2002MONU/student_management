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
               <h4 class="card-title">Why Choose Us  Details</h4>
               @if(Session('success'))
               <div class="alert alert-success" role="alert">
                {{session('success')}}
               </div>
             @endif
            </div>
            <div class="header-title "> 
               <a href="{{url('whychoose')}}" class="btn btn-info">Add Why Choose Details</a>
            </div>
         </div>
         <div class="card-body p-0">
            <div class="table-responsive">
               <table class="table">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Heading</th>
                        <!-- <th>Description</th> -->
                        <th>Status</th>
                        <th> Image</th>
                       <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                     @foreach($whychoose as $why)
                     <tr>
                        <th>{{$why->id}}</th>
                        <td>{{$why->heading}}</td>
                        <!-- <td>{{$why->description}}</td> -->
                        <td>@if($why->status == 1)
                           <a href="#" class="btn btn-sm btn-success">Active</a>
                              @else
                           <a href="#" class="btn btn-sm btn-danger">pending</a>
                           @endif</td>
                        <th><a href="{{asset('web_assets/whychoose/'.$why->image)}}" target="_blank">
                        <img src="{{asset('web_assets/whychoose/'.$why->image)}}" style="width:30px;height:30px;"></a></th>
                        <td><a href="{{url('whyupdate',['id' => $why->id])}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></td>
                        
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