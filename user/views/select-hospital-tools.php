<?php require('./backends/select-hospital-tools-b.php') ?>
<div class="container my-2">
	<div class=" mb-4">
		<p class="mb-0">
			Please tap any of the tools to select what you want to start using them
		</p>
		<span >*</span>
		<small> (prices may apply)</small>
		<p class="err mt-2"><?=$err?></p>
	</div>
	<form class="row" action="" method="post">
		<div class="col-12 col-sm-6 mb-3">
			<div class="d-flex align-items-center bg-info checkbox-btn depth-hover">
				<input type="checkbox" name="patient-ms">
				<label class="m-0 ml-4">Patient Management System</label>
			</div>
		</div>
		<div class="col-12 col-sm-6 mb-3">
			<div class="d-flex align-items-center bg-purple checkbox-btn depth-hover">
				<input type="checkbox" name="finance-ms">
				<label class="m-0 ml-4">Finance Management System</label>
			</div>
		</div>
		<div class="col-12 col-sm-6 mb-3">
			<div class="d-flex align-items-center bg-success checkbox-btn depth-hover">
				<input type="checkbox" name="activity-ms">
				<label class="m-0 ml-4">Activity Tracker</label>
			</div>
		</div>
		
		<div class="col-12 mb-3">
			<p class="mt-3">Click the button below to save these settings</p>
			<button class="btn green-btn" name="save">Save and Continue</button>
		</div>
	</form>
</div>