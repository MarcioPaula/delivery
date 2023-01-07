
<!DOCTYPE html>
<html>
<head>
  <title>Star Admin Premium Laravel Admin Dashboard Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="_token" content="4Cnqt9GsqBinXKwZfPva1JZNacYDxJOXAaMneuDe">

  <link rel="shortcut icon" href="https://www.bootstrapdash.com/demo/star-laravel-pro/template/favicon.ico">

  <!-- plugin css -->
  <link media="all" type="text/css" rel="stylesheet" href="https://www.bootstrapdash.com/demo/star-laravel-pro/template/assets/plugins/@mdi/font/css/materialdesignicons.min.css">
  <link media="all" type="text/css" rel="stylesheet" href="https://www.bootstrapdash.com/demo/star-laravel-pro/template/assets/plugins/perfect-scrollbar/perfect-scrollbar.css">
  <!-- end plugin css -->

  <!-- plugin css -->
    <!-- end plugin css -->

  <!-- common css -->
  <link media="all" type="text/css" rel="stylesheet" href="https://www.bootstrapdash.com/demo/star-laravel-pro/template/css/app.css">
  <!-- end common css -->

  </head>
<body data-base-url="https://www.bootstrapdash.com/demo/star-laravel-pro/template">

  <div class="container-scroller" id="app">
    <div class="container-fluid page-body-wrapper full-page-wrapper">

<div class="content-wrapper auth p-0 theme-two">
  <div class="row d-flex align-items-stretch">
    <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
      <div class="slide-content" style="background-image: url(https://www.bootstrapdash.com/demo/star-laravel-pro/template/assets/images/auth/login_2.jpg); background-size: cover;"> </div>
    </div>
    <div class="col-12 col-md-8 h-100 bg-white">
      <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
        <div class="nav-get-started">
          <p>Don't have an account?</p>
          <a class="btn get-started-btn" href="https://www.bootstrapdash.com/demo/star-laravel-pro/template/user-pages/register-2">GET STARTED</a>
        </div>
        <form action="{{ route('login.auth') }}" method="POST">
            {{ csrf_field() }}
          <h3 class="mr-auto">Hello! let's get started</h3>
          <p class="mb-5 mr-auto">Enter your details below.</p>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="mdi mdi-account-outline"></i>
                </span>
              </div>
              <input type="text" name="email" class="form-control" placeholder="Username">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="mdi mdi-lock-outline"></i>
                </span>
              </div>
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <button class="btn btn-primary submit-btn">Logar</button>
          </div>
          <div class="wrapper mt-5 text-gray">
            <p class="footer-text">Copyright © 2018 Bootstrapdash. All rights reserved.</p>
            <ul class="auth-footer text-gray">
              <li>
                <a href="#">Terms & Conditions</a>
              </li>
              <li>
                <a href="#">Cookie Policy</a>
              </li>
            </ul>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

    </div>
  </div>

    <!-- base js -->
    <script src="https://www.bootstrapdash.com/demo/star-laravel-pro/template/js/app.js"></script>
    <!-- end base js -->

    <!-- plugin js -->
        <!-- end plugin js -->

    </body>
</html>
