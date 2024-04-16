@extends('layout.app')
@section('title') {{'About Update'}} @endsection
@section('content')
<main class="main-content">
<div class="position-relative">
<div class="container-fluid content-inner pb-0">

    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Home Page Details</h4>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                <div class="card-body">
                    <form action="{{url('aupdate',$abouts->id)}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" required value="{{$abouts->title}}">
                            @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                     @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="heading">Heading</label>
                            <input type="text" class="form-control" name="heading" id="heading" value="{{$abouts->heading}}" required>
                              @if ($errors->has('heading'))
                                <span class="text-danger">{{ $errors->first('heading') }}</span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Description">Description:</label>
                            <input type="text"  value="{{$abouts->description}}" class="form-control" name="description" id="Description" required>
                            @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Description">Paragraph:</label>
                            <input type="text" value="{{$abouts->paragraph}}" class="form-control" name="paragraph" id="Description" required>
                            @if ($errors->has('paragraph'))
                            <span class="text-danger">{{ $errors->first('paragraph') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Image">Top Image</label>
                            <input type="file" class="form-control" id="Image" name="topimage"  >
                            <a href="{{ asset('web_assets/aboutimages/'.$abouts->topimage) }}" target="_blank">
					        <img src="{{ asset('web_assets/aboutimages/'.$abouts->topimage) }}" width="180"      height="150"  class="card" alt="No image" width="880" height="650" > </a>
                            @if ($errors->has('topimage'))
                            <span class="text-danger">{{ $errors->first('topimage') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Image">Bottom Image</label>
                            <input type="file" class="form-control"  id="Image" name="bottomimage"  > <a href="{{ asset('web_assets/aboutimages/'.$abouts->bottomimage) }}" target="_blank">
					        <img src="{{ asset('web_assets/aboutimages/'.$abouts->bottomimage) }}" width="180"      height="150"  class="card" alt="No image" width="880" height="650" > </a>

                            @if ($errors->has('bottomimage'))
                            <span class="text-danger">{{ $errors->first('bottomimage') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Description">Our Travellers:</label>
                            <input type="text" class="form-control" name="traveller" id="Description" required  value="{{$abouts->traveller}}">
                            @if ($errors->has('traveller'))
                            <span class="text-danger">{{ $errors->first('traveller') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Description">Monthly Bookings:</label>
                            <input type="text" value="{{$abouts->mbooking}}" class="form-control" name="mbooking" id="Description" required>
                            @if ($errors->has('mbooking'))
                            <span class="text-danger">{{ $errors->first('mbooking') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Description">Completed Trips:</label>
                            <input type="text" class="form-control" value="{{$abouts->ctrip}}" name="ctrip" id="Description" required>
                            @if ($errors->has('ctrip'))
                            <span class="text-danger">{{ $errors->first('ctrip') }}</span>
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
