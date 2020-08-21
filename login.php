<?php  require './backends/login-b.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Eureka | Login</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/extra-responsive.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	</head>
	<body id="login-page" class="flex flex-column ">
	<?php require 'header.php'; mobileMenu() ?>
		<main class="col px-0">
			<section class="container-fluid" id="login">
				<div class="row mt-3 mt-md-4">
					<div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 mt-5  mx-auto">
						<form method="post" class="p-5 mx-auto bg-white login" style="">
		         			<h5 class="m-0 mb-4 txt-shadow-2">Enter Your Login Details</h5>
		            		<div class="form-group mb-5">
	                			<label class="green-txt" for="identity">Email or Phone</label>
		            			<input id="identity" type="text" class="form-control" name="identity" value="<?=$identity?>">
	                			<small class="err"><?=$identity_err?></small>
		            		</div>
		            		<div class="relative form-group ">
		            			<div class="d-flex">
		            				<label class="green-txt" for="pass">Password</label>
		            				<a href="" class="ml-auto link" style="font-size: 90%">Forgot?</a>
		            			</div>
		            			<input id="pass" type="password" class="form-control" name="pass">
		            			<small class="err"><?=$pass_err?></small>
		            		</div>
		            		<div class="">
		            			<button class="btn btn-block green-btn" name="login">Login</button>
		            		</div>
		            	</form>
					</div>
				</div>
			</section>
		</main>
		<?php require 'scripts.php';?>
	</body>
</html>