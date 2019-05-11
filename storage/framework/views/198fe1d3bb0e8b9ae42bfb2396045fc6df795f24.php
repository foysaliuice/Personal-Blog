<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/login/vendor/bootstrap/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/login/vendor/animate/animate.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/login/vendor/css-hamburgers/hamburgers.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/login/vendor/select2/select2.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/login/css/util.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/login/css/main.css')); ?>">
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form action="<?php echo e(url('/admin-login-check')); ?>" method="POST" class="login100-form validate-form">
					<?php echo csrf_field(); ?>
					<span class="login100-form-title p-b-55">
						Login
					</span>

					<?php
						$exception = Session::get('exception');
						if ($exception) { ?>
							<div class="alert alert-danger wrap-input100 validate-input m-b-16 text-center" id="exception" role="alert">
								<?php
									echo $exception;
									Session::put('exception','');
								 ?>
							</div>

					<?php }?>

					<?php
						$message = Session::get('message');
						if ($message) { ?>
							<div class="alert alert-success wrap-input100 validate-input m-b-16 text-center" role="alert">
								<?php
									echo $message;
									Session::put('message','');
								 ?>
							</div>

					<?php }?>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="admin_email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="admin_password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<div class="contact100-form-checkbox m-l-4">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn p-t-25">
						<button type="submit" id="submitBtn" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center w-full p-t-42 p-b-22">
						<span class="txt1">
							Or login with
						</span>
					</div>

					<a href="#" class="btn-face m-b-10">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="#" class="btn-google m-b-10">
						<img src="<?php echo e(asset('public/assets/admin/login/images/icons/icon-google.png')); ?>" alt="GOOGLE">
						Google
					</a>

					<div class="text-center w-full">
						<span class="txt1">
							Not a member?
						</span>

						<a class="txt1 bo1 hov1" href="#">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="<?php echo e(asset('public/assets/admin/login/vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/admin/login/vendor/bootstrap/js/popper.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/admin/login/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/admin/login/vendor/select2/select2.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/admin/login/js/main.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\MyBlog\resources\views/admin/pages/login.blade.php ENDPATH**/ ?>