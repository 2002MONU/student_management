@extends('layout.app')
@section('title') {{'Show Message'}} @endsection
@section('content')
<main class="main-content">
<div class="position-relative">
<div class="container-fluid content-inner pb-0">
<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div class="card-header d-flex justify-content-between border-0">
            <div class="header-title ">
               <h4 class="card-title">Show Message</h4>
            </div>
         </div>
         <div class="card-body p-0">
            <div class="table-responsive">
               <table class="table">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                       <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                     @foreach($messages as $message)
                     <tr>
                        <th>{{$message->id}}</th>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->message}}</td>
                        <th><a href="mailto:{{$message->email}}" class="btn btn-info">Reply</a></th>
                        
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