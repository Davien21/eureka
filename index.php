<?php
	// require './backends/login-b.php';
?>

<!DOCTYPE html>
<html>
	<?php require 'head.php'; ?>
			<main class=" col">
				<div class="container-fluid ">
					<div class="row justify-content-center">
						<div class="col-sm-8 col-md-6 col-lg-5 col-xl-4 my-5 my-md-4">
							<div class="card zoom">
							  <div class="view overlay ">
							    <img class="card-img-top rounded-0" src="./assets/imgs/hospital-sm.jpg" alt="Card image cap">
							    <a href="./login.php?t=director">
							      <div class="mask rgba-white-slight"></div>
							    </a>
							  </div>
						 
							  <div class="card-body">

							    <h4 class="card-title text-primary"><a>Director Login</a></h4>
							    <hr>
							    <p class="card-text">Click the button below to login as a Hospital Director.</p>
							    <a href="./login.php?t=director" class="btn btn-primary mx-0">Login</a>

							  </div>
							</div>
						</div>
						<div class="col-sm-8 col-md-6 col-lg-5 col-xl-4 my-5 my-md-4">
							<div class="card zoom">
							  <div class="view overlay  border-boo">
							    <img class="card-img-top rounded-0" src="./assets/imgs/staff.jpg" alt="Card image cap">
							    <a href="./login.php?t=staff">
							      <div class="mask rgba-white-slight"></div>
							    </a>
							  </div>
							  <div class="card-body">

							    <h4 class="card-title text-primary"><a>Staff Login</a></h4>
							    <hr>
							    <p class="card-text">Click the button below to login as a Hospital Staff.</p>
							    <a href="./login.php?t=staff" class="btn btn-primary mx-0">Login</a>

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