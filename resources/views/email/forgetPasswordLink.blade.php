<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Change Password </title>
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
			<h1>Reset Password</h1>
		</div>
		
                  @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
		<form id="member-registration" action="{{url('resetpassword')}}" method="POST" class="form-validate form-horizontal well" enctype="multipart/form-data">
            @csrf
			<fieldset>
				<legend>Reset Password</legend>
				<input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
					<label for="exampleInputEmail1">Email Address *</label>
					<input type="email" class="form-control" name="email" id="exampleInputEmail1"  required>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  
                </div>

                <div class="form-group">
					<label for="password">New Password *</label>
					<input type="password" class="form-control" name="password" id="password"  required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  
                </div>
                <div class="form-group">
					<label for="password_confirmation">Confirm Password *</label>
					<input type="password" class="form-control" name="password_confirmation" id="password_confirmation"  required>
                    @if ($errors->has('password_confirmation'))
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                  
                </div>
				
				<div class="d-flex justify-content-between align-items-center">
					<div class="form-group d-flex justify-content-start">
						<button type="submit" name="sumbit" class="btn btn-primary">Reset Password</button>
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