<?php  require './backends/signup-b.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Eureka | Signup</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/extra-responsive.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	</head>
	<body id="login-page" class="flex flex-column ">
	<?php require 'header.php'; mobileMenu() ?>
		<main class="col px-0">
			<section class="container-fluid" id="login">
				<div class="row  my-md-4">
					<div class="col-12 col-sm-9 col-md-8 col-lg-5 mt-5  mx-auto">
						<form method="post" class="p-5 mx-auto bg-white login" style="">
		         			<h5 class="m-0 mb-4 txt-shadow-2">Sign up on Eureka</h5>
		         			<div class="form-group">
	                			<label class="green-txt" for="f_name">First Name</label>
		            			<input id="f_name" type="text" class="form-control" name="f_name" value="<?=$f_name?>">
	                			<small class="err"><?=$f_name_err?></small>
		            		</div>
		            		<div class="form-group">
	                			<label class="green-txt" for="l_name">Last Name</label>
		            			<input id="l_name" type="text" class="form-control" name="l_name" value="<?=$l_name?>">
	                			<small class="err"><?=$l_name_err?></small>
		            		</div>
		            		<div class="form-group">
	                			<label class="green-txt" for="email">Email Address</label>
		            			<input id="email" type="text" class="form-control" name="email" value="<?=$email?>">
	                			<small class="err"><?=$email_err?></small>
		            		</div>
		            		<div class="form-group">
	                			<label class="green-txt" for="phone">Phone Number</label>
		            			<input id="phone" type="text" class="form-control" name="phone" value="<?=$phone?>">
	                			<small class="err"><?=$phone_err?></small>
		            		</div>
		            		<div class="form-group">
	            				<label class="green-txt" for="pass">Password</label>
		            			<input id="pass" type="password" class="form-control" name="pass">
	                			<small class="err"><?=$pass_err?></small>
		            		</div>
		            		 
		            		<div class=" mt-4">
		            			<button class="btn btn-block  green-btn" name="signup">Sign Up</button>
		            		</div>
		            	</form>
					</div>
				</div>
			</section>
		</main>
		<?php require 'scripts.php';?>
	</body>
</html>