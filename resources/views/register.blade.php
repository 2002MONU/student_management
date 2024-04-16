<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Register Page</title>
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
			<h1>Sign up</h1>
		</div>
		@if ($errors->any())
		@foreach ($errors->all() as $error)
				<div class="alert alert-danger" role="alert">{{$error}}</div>
			@endforeach
		@endif
		<div class="card-body">
         @if (session('success'))
		<div class="alert alert-success" role="alert">
			{{ session('success') }}
		</div>
	@endif
		<form id="member-registration" action="{{url('registerstore')}}" method="POST" class="form-validate form-horizontal well" enctype="multipart/form-data">
            @csrf
			<fieldset>
				<legend>User Registration</legend>
				<div class="form-group">
					<label for="exampleInputPassword1">Name *</label>
					<input type="text" class="form-control" name="name" id="exampleInputPassword1" value="{{old('name')}}" required>
				</div>
                <div class="form-group">
					<label for="exampleInputEmail1">Email Address *</label>
					<input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{old('email')}}" required>
					@if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                     @endif
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Gender *</label><br>
					<div class="row d-flex ">
					 <input type="radio" id="html" name="gender" value="Male" class="ml-2" >
					 <label for="html" class="ml-3">Male</label><br>
					 <input type="radio" id="css" name="gender" value="Female" class="ml-5">
					 <label for="css" class="ml-3">Female</label><br>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">City*</label>
					<select name="city" id="" class="form-control" required>
					   <option >Select City</option>
						<option value="delhi">Delhi</option>
						<option value="visakhapatnam">Visakhapatnam</option>
						<option value="hyderabad">Hyderabad</option>
						<option value="up">Uttar Pradesh</option>
					</select>
					@if ($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                     @endif
				</div>
				<div class="form-group">
				<div class="row">
					<div class="col-md-6">
					<label for="exampleInputEmail1">Technologies Known*</label><br>
				    <input type="checkbox" id="vehicle1" name="technologies[]" value="c">
					<label for="vehicle1"> C</label><br>
					<input type="checkbox" id="vehicle2" name="technologies[]" value="c++">
					<label for="vehicle2">C++</label><br>
					<input type="checkbox" id="vehicle3" name="technologies[]" value="java">
					<label for="vehicle3">Java</label><br>
					<input type="checkbox" id="vehicle3" name="technologies[]" value="python">
					<label for="vehicle3">Python</label>
					
				</div>
				<div class="col-md-6">
				<label for="exampleInputEmail1">Hobbies </label><br>
				    <input type="checkbox" id="vehicle1" name="hobbies[]" value="cricket">
					<label for="vehicle1">Playing Cricket</label><br>
					<input type="checkbox" id="vehicle2" name="hobbies[]" value="tv">
					<label for="vehicle2">Watching TV</label><br>
					<input type="checkbox" id="vehicle3" name="hobbies[]" value="books">
					<label for="vehicle3">Reading Books</label><br>
					<input type="checkbox" id="vehicle3" name="hobbies[]" value="volleyball">
					<label for="vehicle3">Playing Volleyball</label><br>
					<input type="checkbox" id="vehicle3" name="hobbies[]" value="chess">
					<label for="vehicle3">Playing Chess</label>
				</div>
				</div>
				</div>
				</div>
				
				<div class="form-group">
					<label for="exampleInputPassword1">User Image *</label>
					<input type="file" class="form-control" name="userimage" id="exampleInputPassword1" required>
					@if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                     @endif
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password *</label>
					<input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
					@if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                     @endif
				</div>
				<div class="d-flex justify-content-between align-items-center">
					<div class="form-group d-flex justify-content-start">
						<button type="submit" name="sumbit" class="btn btn-primary">Submit</button>
					</div>
					<div class="form-check form-group d-flex justify-content-end">
						<a href="{{url('userslogin')}}">Sign in </a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

   
    
  </body>
</html>