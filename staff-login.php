<?php
	require './backends/login-b.php';
?>

<!DOCTYPE html>
<html>
	<?php require 'head.php'; ?>
			<main class="bg1 col">
				<div class="container-fluid ">
					<div class="row">
						<div class="col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto my-5">
							<form method="post" class="p-5 bg-white paper-box-shadow" onsubmit="return false">
	             			<h5 class="m-0 ">Login</h5>
	                		<div class="form-group md-form">
	                			<input id="email" type="text" class="form-control" name="email" value="<?=$email?>">
	                			<label for="email">Email or Phone</label>
	                			<span class="err"><?=$email_err?></span>
	                		</div>
	                		<div class="form-group md-form">
	                			<input id="pass" type="password" class="form-control" name="pass">
	                			<label for="pass">Password</label>
	                			<div class="d-flex absolute small" style="right: 0;bottom: 5px">
	                				<a href="" class="ml-auto link">Forgot?</a>
	                			</div>
	                			<span class="err"><?=$pass_err?></span>
	                		</div>
	                		<div class="form-group md-form">
	                			<button class="btn btn-block btn-success" name="login">Login</button>
	                		</div>
	                	</form>
						</div>
					</div>
				</div>
			</main>
			
		</div>
		<?php require 'scripts.php';?>
	</body>
</html>