<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>User Change Password</title>
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
			<h2>Change Password</h2>
		</div>

		<form id="member-registration" action="{{url('changePassword')}}" method="POST" class="form-validate form-horizontal well" enctype="multipart/form-data">
            @csrf
			<fieldset>
				<legend>Change Password</legend>
				<div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @elseif (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="form-group">
					<label for="old_password">Old Password *</label>
					<input type="password" class="form-control" name="old_password" id="old_password"  required>
                    @error('old_password')
                     <span class="text-danger">{{ $message }}</span>
                 @enderror
                </div>
				<div class="form-group">
					<label for="password">New Password *</label>
					<input type="password" class="form-control" name="password" id="password" required>
                    @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                </div>
                <div class="form-group">
					<label for="new_password_confirmation">Confirm Password *</label>
					<input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation" required>
                    @error('new_password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                </div>
				<div class="d-flex justify-content-between align-items-center">
					<div class="form-group d-flex justify-content-start">
						<button type="submit" name="sumbit" class="btn btn-primary">Change Password</button>
					</div>
					<div class="form-check form-group d-flex justify-content-end">
						<a href="{{url('userdashboard')}}" class="btn btn-info">Back </a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

   
    
  </body>
</html>