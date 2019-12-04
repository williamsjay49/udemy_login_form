<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device,initial-scale=1 shrink-to-fit=no">
	<title>Udemy SignUp and Login form</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- navbar -->
<?php include 'parts/nav.php' ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 content">
			<h1>It's always free</h1><hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div><!-- /col -->
		<div class="col-md-4 content">
			<div class="signup-cover">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-9">
								<h3 class="form-heading">SignUp</h3>
								<p>Account creation is 100% free, so please create your account.</p>
							</div><!-- /col -->
							<div class="col-md-3">
								<i class="fa fa-pencil-square-o fa-3x "></i>
							</div><!-- /col -->
						</div><!-- /row -->
					</div><!-- /card-header -->
					<div class="card-body">
						<form id="signup_submit">
							<div class="form-group show-progress">
								
							</div>
							<div class="form-group">
								<input type="text" name="name" id="name" class="form-control" placeholder="Enter name...">
								<div class="name-error error"></div>
							</div><!-- /form-group-->
							<div class="form-group">
								<input type="email" id="email" name="email" class="form-control" placeholder="Enter Email...">
								<div class="email-error error"></div>

							</div><!-- /form-group-->
							<div class="form-group">
								<input name="password" type="password" id="password" class="form-control" placeholder="Enter Password...">
								<div class="password-error error"></div>

							</div><!-- /form-group-->
							<div class="form-group">
								<input type="password" id="confirm" class="form-control" placeholder="Confirm Password...">
								<div class="confirm-error error"></div>

							</div><!-- /form-group-->
							<div class="form-group">
								<button type="button" id="submit" class="btn btn-success btn-block form-btn">Create Account</button>
							</div><!-- /form-group-->
							<div class="form-group">
								<a href="#" id="login">Already have an Account</a>
							</div>
						</form><!-- /form -->
					</div><!--/card-body -->
				</div><!--/card -->
			</div><!-- /signup-cover -->
			<div class="login-cover">	
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-9">
								<h3 class="form-heading">Login</h3>
								<p>Enter Email and Password</p>
							</div><!-- /col -->
							<div class="col-md-3">
								<i class="fa fa-lock fa-3x "></i>
							</div><!-- /col -->
						</div><!-- /row -->
					</div><!-- /card-header -->
					<div class="card-body">
						<form action="">
							<div class="form-group">
								<input type="email" id="login-email" class="form-control" placeholder="Enter Email...">
								<div class="login-email-error error"></div>
							</div><!-- /form-group-->
							<div class="form-group">
								<input type="password" id="login-password" class="form-control" placeholder="Enter Password...">
								<div class="login-password-error error"></div>
							</div><!-- /form-group-->
							<div class="form-group">
								<button type="button" id="login-submit" class="btn btn-success btn-block form-btn">Login</button>
							</div><!-- /form-group-->
							<div class="form-group">
								<a href="#" id="signup">Create New Account</a>
							</div>
						</form><!-- /form -->
					</div><!--/card-body -->
				</div><!--/card -->
			</div><!-- /login-cover -->
		</div><!-- /col -->
	</div><!-- /row -->
</div><!-- /container -->


<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/simple.js"></script>
<script type="text/javascript" src="assets/js/signup.js"></script>
<script type="text/javascript" src="assets/js/login.js"></script>

</body>
</html>