<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" >
    <title>Admin Login</title>
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
			<h1>Sign in</h1>
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
		<form id="member-registration" action="{{route('admin.login')}}" method="POST" class="form-validate form-horizontal well" enctype="multipart/form-data">
            @csrf
			<fieldset>
				<legend>Admin Login</legend>
				
                <div class="form-group">
					<label for="exampleInputEmail1">Email Address *</label>
					<input type="email" class="form-control" name="email" id="exampleInputEmail1"  required>
					@if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
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
						<button type="submit" name="sumbit" class="btn btn-primary">Login</button>
					</div>
					<div class="form-check form-group d-flex justify-content-end">
						<a href="{{url('register')}}" class="btn btn-info">Sign up</a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

   
    
  </body>
</html>