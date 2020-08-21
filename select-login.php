<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Eureka | Choose Login</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/extra-responsive.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	</head>
	<body id="select-login-page" class="flex flex-column ">
	<!-- <img src="./assets/imgs/bgs/bg-3.jpg" class="max-100vh absolute"> -->
	<?php require 'header.php'; mobileMenu() ?>
			<main class=" col mt-lg-4 pt-lg-3 raleway-all">
				<div class="container-fluid ">
					<div class="row justify-content-center">
						<div class="col-sm-8 col-md-6 col-lg-5 col-xl-4 my-5 my-md-4">
							<div class="card zoom">
							  <div class="view overlay ">
							    <img class=" card-img-top rounded-0" src="./assets/imgs/hospital-sm.jpg" alt="Card image cap">
							    <a href="./login.php?t=director">
							      <div class="mask rgba-white-slight"></div>
							    </a>
							  </div>
						 
							  <div class="card-body">

							    <h4 class="card-title text-primary"><a>Director Login</a></h4>
							    <hr>
							    <p class="card-text">Click the button below to login as a Hospital Director.</p>
							    <a href="./login.php?t=director" class="btn green-btn mx-0 ">Login</a>

							  </div>
							</div>
						</div>
						<div class="col-sm-8 col-md-6 col-lg-5 col-xl-4 my-5 my-md-4">
							<div class="card zoom">
							  <div class="view overlay  border-boo">
							    <img class=" card-img-top rounded-0" src="./assets/imgs/staff.jpg" alt="Card image cap">
							    <a href="./login.php?t=staff">
							      <div class="mask rgba-white-slight"></div>
							    </a>
							  </div>
							  <div class="card-body">

							    <h4 class="card-title text-primary"><a>Staff Login</a></h4>
							    <hr>
							    <p class="card-text">Click the button below to login as a Hospital Staff.</p>
							    <a href="./login.php?t=staff" class="btn green-btn mx-0 ">Login</a>

							  </div>
							</div>
						</div>
					</div>
				</div>
			</main>
			
		</div>
		<?php require 'scripts.php';?>
	</body>
</html>