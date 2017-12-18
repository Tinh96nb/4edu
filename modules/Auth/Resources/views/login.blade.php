	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Đăng nhập hệ thống 4edu</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.6 -->
		<link rel="stylesheet" href="{{ asset('4edu/bootstrap/css/bootstrap.min.css') }}">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{ asset('4edu/dist/css/AdminLTE.min.css') }}">
		<!-- iCheck -->
		<link rel="stylesheet" href="{{ asset('4edu/plugins/iCheck/square/blue.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('js/toastr.min.css') }}">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="{{ route('login') }}"><b>4edu</b></a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Đăng nhập vào hệ thống</p>
			@if(session('msg'))
			<p class="text-danger">{{ session('msg') }}</p>
			@endif
			<form method="POST" name="user" enctype="multipart/form- data" action="" id="user">
				{{csrf_field()}}
				<div class="form-group has-feedback">
					<input type="text" name="username" class="form-control col-md-3" placeholder="Username/Email" value="">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					@if(asset($errors->first('username')))
					<span class="text-danger">{{$errors->first('username')}}</span>
					@endif
				</div>
				<div class="form-group has-feedback">
					<input type="password" name="password" class="form-control col-md-3" placeholder="**********" value="">
					@if(asset($errors->first('password')))
					<span class="text-danger">{{$errors->first('password')}}</span>
					@endif
				</div>
				<div class="row">
					<div class="col-xs-8">

					</div>
					<!-- /.col -->
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
					</div>
					<!-- /.col -->
				</div>
			</form>

			<div class="social-auth-links text-center">
				<p>- OR -</p>
				<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
					Facebook</a>
					<a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
						Google+</a>
					</div>
					<!-- /.social-auth-links -->

					<a href="#">I forgot my password</a><br>
					<a href="" class="text-center">Register a new membership</a>

				</div>
				<!-- /.login-box-body -->
			</div>
			<!-- /.login-box -->

			<!-- jQuery 2.2.3 -->
			<script src="{{ asset('4edu/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
			<!-- Bootstrap 3.3.6 -->
			<script src="{{  asset('4edu/bootstrap/js/bootstrap.min.js') }}"></script>
			<!-- iCheck -->
			<script src="{{  asset('4edu/plugins/iCheck/icheck.min.js') }}"></script>
			<script src="{{ asset('4edu/dist/js/demo.js') }}"></script>
			<script src="{{ asset('js/toastr.min.js') }}"></script>
			<script>
  $(document).ready(function () { //ready
  	@if(Session::has('message'))
  	var type="{{Session::get('alert-type','info')}}"
  	switch(type){
  		case 'info':
  		toastr.info("{{ Session::get('message') }}");
  		break;
  		case 'success':
  		toastr.success("{{ Session::get('message') }}");
  		break;
  		case 'warning':
  		toastr.warning("{{ Session::get('message') }}");
  		break;
  		case 'error':
  		toastr.error("{{ Session::get('message') }}");
  		break;
  	}
  	@endif
  });
</script>
</body>
</html>
