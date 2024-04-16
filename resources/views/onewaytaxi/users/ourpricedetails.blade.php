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
               <h4 class="card-title">Our Prices  Details</h4>
               @if(Session('success'))
               <div class="alert alert-success" role="alert">
                {{session('success')}}
               </div>
             @endif
            </div>
            <div class="header-title "> 
               <a href="{{url('price')}}" class="btn btn-info">Add Our Prices Details</a>
            </div>
         </div>
         <div class="card-body p-0">
            <div class="table-responsive">
               <table class="table">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Price </th>
                        <th>Time</th>
                        <!-- <th> Paragraph</th> -->
                        <th>Status</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                     @foreach($ourprices as $ourprice)
                     <tr>
                        <th>{{$ourprice->id}}</th>
                        <td>{{$ourprice->price}}</td>
                        <td>{{$ourprice->time}}</td>
                        <!-- <th>{{$ourprice->paragraph}}</th> -->
                        <td>@if($ourprice->status == 1)
                           <a href="#" class="btn btn-sm btn-success">Active</a>
                              @else
                           <a href="#" class="btn btn-sm btn-danger">pending</a>
                           @endif</td>
                        <th><a href="{{asset('web_assets/priceimages/'.$ourprice->image)}}" target="_blank">
                        <img src="{{asset('web_assets/priceimages/'.$ourprice->image)}}" style="width:30px;height:30px;"></a></th>
                        <td><a href="{{url('priceupdate',['id' => $ourprice->id])}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
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