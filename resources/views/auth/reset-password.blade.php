<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('authen/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('authen/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('authen/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('authen/css/style.css')}}">

    <title>Sandee Cafe</title>
  </head>
  <body>


  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('authen/images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3><strong>Reset Password</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form  class="login-form" method="POST" action= "{{ route('password.store') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

					  <div class="form-group">
		      			<input  type="email" name ="email" class="form-control rounded-left" placeholder="Email" value=" {{$request->email}}" required   >
		      		</div>

					<div class="form-group d-flex">
	              <input type="password" name= "password" class="form-control rounded-left" placeholder="Password" required>
	            	</div>


				  <div class="form-group d-flex">
	              <input type="password" name= "password_confirmation" class="form-control rounded-left" placeholder="Comfirm Password " required>
	            </div>



				<div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Reset Password</button>
	            </div>
	            <div class="form-group d-md-flex">

                <div class="w-30 text-md-right">




	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>



    <script src="{{asset('authen/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('authen/js/popper.min.js')}}"></script>
    <script src="{{asset('authen/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('authen/js/main.js')}}"></script>
  </body>
</html>
