<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  />
    <title>User Details</title>
  </head>
  <body>
   <section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <h4 class="text-center mt-5">User Details</h4>
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                  {{ session('success') }}
                </div>
              @endif
                <a href="{{'logout'}}" class="btn btn-warning ">Logout</a>
                <div class="form-check form-group d-flex justify-content-end">
						<a href="{{url('change-password')}}" class="btn btn-info">Change Password</a>
					</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <table class="table">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Gender</th>
                        <th>Hobbies</th>
                        <th>Technologies</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                    
                      <th>{{$userdata->id}}</th>
                      <th>{{ucfirst($userdata->name)}}</th>
                      <th>{{$userdata->email}}</th>
                      <th>{{ucfirst($userdata->city)}}</th>
                      <th>{{$userdata->gender}}</th>
                      <th>{{$userdata->hobbies}}</th>
                      <th>{{$userdata->technologies}}</th>
                      <th><a href="{{asset('user-image/'.$userdata->userimage)}}" target="_blank"><img src="{{asset('user-image/'.$userdata->userimage)}}" style="width:30px;height:30px;"></a></th>
                      <th><a href="{{url('updateuser',['id' => $userdata->id])}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                      
                    </th>
                    </tr>
                      </tbody>
                    </table>
            </div>
        </div>
    </div>
   </section>

  </body>
</html>