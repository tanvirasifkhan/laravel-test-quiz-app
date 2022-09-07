<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | Laravel Quiz System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/icheck-bootstrap.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page accent-teal" style="height:75vh;background:#CFD8DC;">
<div class="login-box">
  <div class="login-logo font-weight-bold">Laravel Quiz App</div>
  <div class="card">
    <div class="card-header text-center">Sign In</div>
    <div class="card-body login-card-body">
      @if(Session::has('error_message'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ Session::get('error_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      @endif
      @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      @endif
    <form action="{{ route('auth.authenticate') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email Address" value="admin@gmail.com" required>
        </div>
        <div class="form-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" value="admin" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block mb-3" style="background-color: #20c997 !important;border-color: #20c997 !important;">Sign In</button>
        <p class="mb-1 text-center">
            <a href="{{ route('auth.register_view') }}">Create an Account as Candidate</a>
        </p>
      </form>
    </div>
  </div>
</div>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/adminlte.js') }}"></script>
</body>
</html>