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
              <h3><strong>Forgot Password</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                @csrf
                <span class="login100-form-logo">
                    <i class="zmdi zmdi-landscape"></i>
                </span>

                <span class="login100-form-title p-b-34 p-t-27">
                Forgot your password?
                </span>
                <h6>No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h6>

                <div class="wrap-input100 validate-input" data-validate = "Enter Email">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

                <input type="submit" value="Email Password Reset Link" class="btn btn-block btn-primary">

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
