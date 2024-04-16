@extends('layout.app')
@section('title') {{'User Details'}} @endsection
@section('content')
<main class="main-content">
<div class="position-relative">
<div class="container-fluid content-inner pb-0">
<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div class="card-header d-flex justify-content-between border-0">
            <div class="header-title ">
               <h4 class="card-title">User Details</h4>
               @if (session('success'))
               <div class="alert alert-success" role="alert">
                   {{ session('success') }}
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
                        <th>User Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Gender</th>
                        <th>Hobbies</th>
                        <th>Technologies</th>
                        <th>User Image</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($users as $user)
                     <tr>
                        <th>{{$user->id}}</th>
                        <td>{{ucfirst($user->name)}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{ucfirst($user->city)}}</td>
                        <td>{{$user->gender}}</td>
                        <th>{{$user->hobbies}}</th>
                        <th>{{$user->technologies}}</th>
                        <th><a href="{{asset('user-image/'.$user->userimage)}}" target="_blank"><img src="{{asset('user-image/'.$user->userimage)}}" style="width:30px;height:30px;"></a></th>
                        <td><a href="{{url('updateadmin',['id' => $user->id])}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="{{('user_delete/'.$user->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                        
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