<?php require('./controllers/home-b.php') ?>
<div class="my-2">
	<span>Welcome back</span> 
	<span class="emphasis"><?=$f_name?></span>!
</div>

<div class="container-fluid px-0">
	<div class="d-flex my-2 justify-content-between">
		<h5>Hospitals:</h5>
	</div>
	<div class="row">
	<?php foreach ($hospital_profiles as $value) { ?>
		<a href="<?=$value['route']?>" class="link-box col-12 col-sm-9 col-md-6 col-xl-4  " title="Click to Open">
			<div class="card zoom bg-white depth-hover rounded">
				<div class="d-flex ">
					<div class="col-6 px-0 d-flex ">
						<img src="../assets/imgs/staff.jpg" alt="Hospital Logo" class="card-img mx-auto align-self-center ">
					</div>
					<div class="col-6 mt-3">
						<div class="d-flex">
							<span class="" >Patients :</span>
							<span style="opacity: 0.7" class=" ml-auto emphasis"><?=$value['patient_no']?></span>
						</div>
						<div class="d-flex my-3">
							<span class="" >Staff :</span>
							<span style="opacity: 0.7" class=" ml-auto emphasis"><?=$value['staff_no']?></span>
						</div>
						<div class="d-flex">
							<span class="" >Status :</span>
							<span style="opacity: 0.7" class=" ml-auto emphasis"><?=ucfirst($value['status'])?></span>
						</div>
					</div>
				</div>
				<hr class="mx-2 mt-2 mb-0">
				<p class="emphasis p-2 " style="opacity: 0.9"><?=$value['name']?></p>
			</div>
		</a>
	<?php } ?>
	</div>
	<section class="my-5">
		<p>More Options:</p>
		<div class="row">
			<div class="col-auto">
				<a href="./hospital-setup" class="green-btn bg-success px-3 py-2">Create Hospital + </a>
			</div>
			<div class="col-auto">
				<a href="./join-hospital" class="green-btn bg-info px-3 py-2">Join Hospital  </a>
			</div>

			
		</div>
	</section>
</div>