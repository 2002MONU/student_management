@extends('layout.app')
@section('title') {{'Add About Pade Content'}} @endsection
@section('content')
<main class="main-content">
<div class="position-relative">
<div class="container-fluid content-inner pb-0">

    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Add About Page Content</h4>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                <div class="card-body">
                    <form action="{{url('addabout')}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                            @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                     @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="heading">Heading</label>
                            <input type="text" class="form-control" name="heading" id="heading" required>
                              @if ($errors->has('heading'))
                                <span class="text-danger">{{ $errors->first('heading') }}</span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Description">Description:</label>
                            <input type="text" class="form-control" name="description" id="Description" required>
                            @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Description">Paragraph:</label>
                            <input type="text" class="form-control" name="paragraph" id="Description" required>
                            @if ($errors->has('paragraph'))
                            <span class="text-danger">{{ $errors->first('paragraph') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Image">Top Image</label>
                            <input type="file" class="form-control" id="Image" name="topimage"  required>
                            @if ($errors->has('topimage'))
                            <span class="text-danger">{{ $errors->first('topimage') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Image">Image</label>
                            <input type="file" class="form-control" id="Image" name="bottomimage"  required>
                            @if ($errors->has('bottomimage'))
                            <span class="text-danger">{{ $errors->first('bottomimage') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="traveller">Our Travellers:</label>
                            <input type="text" class="form-control" name="traveller" id="traveller" required>
                            @if ($errors->has('traveller'))
                            <span class="text-danger">{{ $errors->first('traveller') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Description">Monthly Bookings:</label>
                            <input type="text" class="form-control" name="mbooking" id="Description" required>
                            @if ($errors->has('mbooking'))
                            <span class="text-danger">{{ $errors->first('mbooking') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Description">Completed Trips:</label>
                            <input type="text" class="form-control" name="ctrip" id="Description" required>
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
