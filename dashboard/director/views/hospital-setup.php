<?php require './director/controllers/hospital-setup-b.php'; ?>
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
		<section class="settings d-none">
			<div class="form-group">
				<div class="custom-control custom-switch ">
					<input type="checkbox" class="custom-control-input" id="patient-ms" name="patient-ms">
					
					<label for="patient-ms" class="custom-control-label">
						Turn <span>On</span> Patient Management System
					</label>
				</div>
			</div>
			<div class="form-group">
				<div class="custom-control custom-switch ">
					<input type="checkbox" id="finance-ms" class="custom-control-input" name="finance-ms">
					
					<label for="finance-ms" class="custom-control-label">
						Turn <span>On</span> Finance Management System
					</label>
				</div>
			</div>
			<div class="form-group">
				<div class="custom-control custom-switch ">
					<input type="checkbox" id="activity-ms" class="custom-control-input" name="activity-ms">
					
					<label for="activity-ms" class="custom-control-label">
						Turn <span>On</span> Activity Tracker
					</label>
				</div>
			</div>
		</section>
		
		<div class="mt-3">
			<button class="btn btn-block green-btn " name="register">NEXT</button>
		</div>
	</form>
</section>