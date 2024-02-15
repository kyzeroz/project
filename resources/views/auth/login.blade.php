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
              <h3><strong>Login</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" placeholder="username" id="username">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                </div>

                <div class="d-sm-flex mb-5 align-items-center">
                  <span class="ml-auto"><a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password</a></span>
                  <span class="ml-auto"><a href="{{ route('register') }}" class="forgot-pass">สมัครสมาชิกที่นี้</a></span>

                </div>

                <input type="submit" value="Log In" class="btn btn-block btn-primary">

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
