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
               <h4 class="card-title">Show Location </h4>
               {{-- <a href="" class="btn btn-primary">Download Excel File</a> --}}
               @if(Session('success'))
               <div class="alert alert-success" role="alert">
                {{session('success')}}
               </div>
             @endif
            </div>
         </div>
         <div class="card-body p-0">
            <div class="table-responsive">
               <table class="table">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Location</th>
                        <th>Email </th>
                        <th>Logo</th>
                        
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     
                     <tr>
                        <th>{{$location->id}}</th>
                        <td>{{$location->location}}</td>
                        <td>{{$location->email}}</td>
                        
                        <th><a href="{{asset('web_assets/logoimage/'.$location->logo)}}" target="_blank"><img src="{{asset('web_assets/logoimage/'.$location->logo)}}" style="width:30px;height:30px;"></a></th>
                        
                        <th><a href="{{url('locationupdate',['id' => $location->id])}}" class="btn btn-info">Update</a></th>
                     </tr>
                   
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection