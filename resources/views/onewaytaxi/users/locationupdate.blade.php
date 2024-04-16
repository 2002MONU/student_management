@extends('layout.app')
@section('content')
<main class="main-content">
<div class="position-relative">
<div class="container-fluid content-inner pb-0">

    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Location Update </h4>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif
                <div class="card-body">
                    <form action="{{url('uplocation',$location->id)}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="title">Location</label>
                            <input type="text" class="form-control" value="{{$location->location}}" name="location" id="title" required>
                            @if ($errors->has('location'))
                    <span class="text-danger">{{ $errors->first('location') }}</span>
                     @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="heading">Email</label>
                            <input type="text" class="form-control" value="{{$location->email}}" name="email" id="heading" required>
                              @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="logo">Logo</label>
                            <input type="file" class="form-control" id="logo" name="logo"  >
                            <a href="{{ asset('web_assets/logoimage/'.$location->logo) }}" target="_blank">
					<img src="{{ asset('web_assets/logoimage/'.$location->logo) }}" width="180" height="150"  class="card" alt="No image" width="880" height="650" > </a>
                            @if ($errors->has('logo'))
                    <span class="text-danger">{{ $errors->first('logo') }}</span>
                     @endif
                        </div>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <button type="submit" name="sumbit" class="btn btn-primary rounded text-capitalize">Submit</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

 @endsection
