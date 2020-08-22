<?php require './backends/hospital-setup-b.php'; ?>
<section class="hospital-setup row ">
	<form class="col-sm-9 col-md-9 col-lg-7 mx-a uto" action="" method="post">
		<p class="">
			Let's get you started up!
		</p>
		<header>
			<h4>Fill in this Form:</h4>
		</header>
		<div class="form-group">
			<label>Hospital Name:</label>
			<input class="form-control" type="text" name="name" value="<?=$name?>">
			<small class="err"><?=$name_err?></small>
		</div>
		<div class="form-group">
			<label>Address:</label>
			<input class="form-control" type="text" name="address" value="<?=$address?>">
			<small class="err"><?=$address_err?></small>
		</div>
		<div class="form-group">
			<label class="d-flex">Hospital Email: <small class="ml-auto" >(use yours if you wish)</small> </label>
			<input class="form-control" type="text" name="email" value="<?=$email?>">
			<small class="err"><?=$email_err?></small>
		</div>
		<div class="form-group">
			<label class="d-flex">Phone Number: <small class="ml-auto" >(use yours if you wish)</small> </label>
			<input class="form-control" type="text" name="phone" value="<?=$phone?>">
			<small class="err"><?=$phone_err?></small>
		</div>
		<div class="mt-3">
			<button class="btn btn-block green-btn " name="register">NEXT</button>
		</div>
	</form>
</section>