<?php
session_start();
    include 'assets/admin/config.php';
    $alert = NULL;
    $settings = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM settings WHERE id='1"));
    $ads = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM settings WHERE id='1"));        
?>
<?php
include "assets/php/header.php";
?>

<body>
<!-- main wrapper of the page -->
		

	<div class="text-center"><strong style="font-size:35px;"><u>Signup</u></strong></div>
	

			<div class="container">
			<div class="row main">
				<div class="col-sm-6 col-xs-12">
					<div class="main-login main-center yellow">
						<form class="" method="post" action="" method="POST">
							
							<div class="form-group">
								<label for="name" class="cols-sm-2 control-label">Your Name</label>
								<div class="cols-sm-10">
								<?php include('includes/error_message.php')?>
                             	<?php include('includes/success_message.php')?>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="email" class="cols-sm-2 control-label">Your Email</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="username" class="cols-sm-2 control-label">Username</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="password" class="cols-sm-2 control-label">Password</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
										<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
										<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
									</div>
								</div>
							</div>

							<div class="form-group ">
								<a href="#" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Signup</a>
							</div>

							<div class="form-group ">
								<p>Dont have an account! <a href="#">Sign Up Here</a> </p>
							</div>
							
						</form>
					</div>
				</div>
				<div class="col-sm-6 col-xs-12">
					<ul class="sign-list yellow">
						<li><a href="#">
							<i class="fa fa-facebook" aria-hidden="true"></i>
							<span>signup with facebook</span>
						</a></li>
						<li><a href="#">
							<i class="fa fa-twitter" aria-hidden="true"></i>
							<span>signup with twitter</span>
						</a></li>
						<li><a href="#">
							<i class="fa fa-google" aria-hidden="true"></i>
							<span>signup with google</span>
						</a></li>
					</ul>
				</div>
			</div>
		</div>

		

	
	<?php
include "assets/php/footer.php";
?>