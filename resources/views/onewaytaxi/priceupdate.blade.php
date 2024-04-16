@extends('layout.app')
@section('title') {{'Price Update'}} @endsection
@section('content')
<main class="main-content">
<div class="position-relative">
<div class="container-fluid content-inner pb-0">

    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">UpdatePrice Details</h4>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                <div class="card-body">
                    <form action="{{url('pupdate',$prices->id)}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="title">Price</label>
                            <input type="text" class="form-control" name="price" id="title" value="{{$prices->price}}"  required>
                            @if ($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                     @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="heading">Time </label>
                            <input type="text" value="{{$prices->time}}" class="form-control" name="time" id="heading" required>
                              @if ($errors->has('time'))
                                <span class="text-danger">{{ $errors->first('time') }}</span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Description">Description:</label>
                            <input type="text" value="{{$prices->paragraph}}" class="form-control" name="paragraph" id="Description" required>
                            @if ($errors->has('paragraph'))
                            <span class="text-danger">{{ $errors->first('paragraph') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Image">Image</label>
                            <input type="file" class="form-control" id="Image" name="image"  >
                            <a href="{{ asset('web_assets/priceimages/'.$prices->image) }}" target="_blank">
					        <img src="{{ asset('web_assets/priceimages/'.$prices->image) }}" width="180" height="150"  class="card" alt="No image" width="880" height="650" > </a>
                            @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
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
