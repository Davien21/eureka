<?php require './director/controllers/new-patient-b.php'; ?>
<?php require './form-alerts.php'; ?>
<?php formAlert($alert_info) ?>
<section class="hospital-setup row ">
	<form class="col col-lg-8 col-xl-7" action="" method="post">
		<header class="my-3">
			<h4>Fill in this Form:</h4>
		</header>
		<div class="form-group">
			<label>First Name:</label>
			<input class="form-control" type="text" name="fname" value="<?=$fname?>">
			<small class="err"><?=$fname_err?></small>
    </div>
    <div class="form-group">
			<label>Last Name:</label>
			<input class="form-control" type="text" name="lname" value="<?=$lname?>">
			<small class="err"><?=$lname_err?></small>
    </div>
    <div class="form-group">
			<label>Phone Number:</label>
			<input class="form-control" type="tel" name="phone" value="<?=$phone?>">
			<small class="err"><?=$phone_err?></small>
		</div>
		<div class="form-group">
			<label>Address:</label>
			<input class="form-control" type="text" name="address" value="<?=$address?>">
			<small class="err"><?=$address_err?></small>
		</div>
    <div class="form-group">
			<label>Next of Kin's Name:</label>
			<input class="form-control" type="text" name="kin_name" value="<?=$kin_name?>">
			<small class="err"><?=$kin_name_err?></small>
    </div>
    <div class="form-group">
			<label>Next of Kin's Number:</label>
			<input class="form-control" type="text" name="kin_num" value="<?=$kin_num?>">
			<small class="err"><?=$kin_num_err?></small>
    </div>
		<div class="mt-3">
			<button class="btn btn-block green-btn " name="register">Register</button>
		</div>
	</form>
</section>

