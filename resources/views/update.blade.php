<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Update Page</title>
  </head>
  <style>
    	@media (min-width:767px){
		.registration{
			max-width: 400px;
		}
	}
  </style>
  <body>
  <div class="container mt-5">
	<div class="registration mx-auto d-block w-100">
		<div class="page-header text-center">
			<h1>Admin Update</h1>
		</div>
		<div class="card-body">
         @if (session('success'))
		<div class="alert alert-success" role="alert">
			{{ session('success') }}
		</div>
	@endif
		<form id="member-registration" action="{{url('adminupdate',$users->id)}}" method="POST" class="form-validate form-horizontal well" enctype="multipart/form-data">
            @csrf
			<fieldset>
				<legend>Admin Update</legend>
				<div class="form-group">
					<label for="exampleInputPassword1">Name *</label>
					<input type="text" class="form-control" name="name" id="exampleInputPassword1" value="{{$users->name}}" required>
					@if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                     @endif
				</div>
                <div class="form-group">
					<label for="exampleInputEmail1">Email Address *</label>
					<input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{$users->email}}" required>
					@if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                     @endif
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Gender *</label><br>
					<div class="row d-flex">
					<input type="radio" id="css" name="gender" value="Male" @if($users->gender == 'Male') checked @endif class="ml-5" >
					 <label for="html" class="ml-3">Male</label><br>
					 <input type="radio" id="css" name="gender" value="Female" @if($users->gender == 'Female') checked @endif class="ml-5" >
					 <label for="css" class="ml-3">Female</label><br>
					</div>
					@if ($errors->has('gender'))
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                     @endif
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">City*</label>
					<select name="city" id="" class="form-control" >
						<option value="delhi" >Delhi</option>
						<option value="visakhapatnam">Visakhapatnam</option>
						<option value="hyderabad">Hyderabad</option>
					</select>
					@if ($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                     @endif
				</div>
				<div class="form-group">
				<div class="row">
					<div class="col-md-6">
					<label for="exampleInputEmail1">Technologies Known*</label><br>
				    <input type="checkbox" id="vehicle1" name="technologies[]" value="c" {{ in_array('c', $technologies) ? 'checked' : '' }}>
					<label for="vehicle1"> C</label><br>
					<input type="checkbox" id="vehicle2" name="technologies[]" value="c++" {{ in_array('c++', $technologies) ? 'checked' : '' }}>
					<label for="vehicle2">C++</label><br>
					<input type="checkbox" id="vehicle3" name="technologies[]" value="java" {{ in_array('java', $technologies) ? 'checked' : '' }}>
					<label for="vehicle3">Java</label><br>
					<input type="checkbox" id="vehicle3" name="technologies[]" value="python" {{ in_array('python', $technologies) ? 'checked' : '' }}>
					<label for="vehicle3">Python</label>
					@if ($errors->has('technologies'))
                    <span class="text-danger">{{ $errors->first('technologies') }}</span>
                     @endif
				</div>
				<div class="col-md-6">
				<label for="exampleInputEmail1">Hobbies </label><br>
				    <input type="checkbox" id="vehicle1" name="hobbies[]" value="cricket" {{ in_array('cricket', $hobbies) ? 'checked' : '' }} >
					<label for="vehicle1">Playing Cricket</label><br>
					<input type="checkbox" id="vehicle2" name="hobbies[]" value="tv" {{ in_array('tv', $hobbies) ? 'checked' : '' }}>
					<label for="vehicle2">Watching TV</label><br>
					<input type="checkbox" id="vehicle3" name="hobbies[]" value="books" {{ in_array('books', $hobbies) ? 'checked' : '' }}>
					<label for="vehicle3">Reading Books</label><br>
					<input type="checkbox" id="vehicle3" name="hobbies[]" value="volleyball" {{ in_array('volleyball', $hobbies) ? 'checked' : '' }}>
					<label for="vehicle3">Playing Volleyball</label><br>
					<input type="checkbox" id="vehicle3" name="hobbies[]" value="chess" {{ in_array('chess', $hobbies) ? 'checked' : '' }}>
					<label for="vehicle3">Playing Chess</label>
					@if ($errors->has('hobbies'))
                    <span class="text-danger">{{ $errors->first('hobbies') }}</span>
                     @endif
				</div>
				</div>
				</div>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">User Image *</label>
					<input type="file" class="form-control" name="userimage" id="exampleInputPassword1"  >
					<a href="{{ asset('user-image/'.$users->userimage) }}" target="_blank">
					<img src="{{ asset('user-image/'.$users->userimage) }}" width="180" height="150"  class="card" alt="No image" width="880" height="650" > </a>
					@if ($errors->has('userimage'))
                    <span class="text-danger">{{ $errors->first('userimage') }}</span>
                     @endif
				</div>
				<div class="form-group">
				<div class="form-group">
					<label for="exampleInputPassword1">Password *</label>
					<input type="password" class="form-control" name="password" id="exampleInputPassword1">
					@if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                     @endif
				</div>
				<div class="d-flex justify-content-between align-items-center">
					<div class="form-group d-flex justify-content-start">
						<button type="submit" name="sumbit" class="btn btn-primary">Update</button>
					</div>
					<div class="form-check form-group d-flex justify-content-end">
						<a href="{{url('admin/userdetails')}}">Back </a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>
</body>
</html>