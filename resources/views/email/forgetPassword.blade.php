<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>User Login</title>
  </head>
  <style>
    	@media (min-width:767px){
		.registration{
			max-width: 400px;
		}
	}
  </style>
  <body>
  <div class="container mt-5 mb-5" style="margin-bottom:30px;">
	<div class="registration mx-auto d-block w-100">
    <h1>Forget Password Email</h1>
   
   
   <a href="{{ route('reset.password.get', $token) }}" style="background-color:#116ed1;width:50px;height:20px;padding:10px;color:white;border-radius:5px;text-decoration:none;">Reset Password</a>
	</div>
</div>

 </body>
</html>