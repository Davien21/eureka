<?php // require './backends/login-b.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Eureka | Home</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/extra-responsive.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	</head>
	<body class="flex flex-column">
		<?php require 'header.php'; fullMenu() ?>
		<main class="col">
			<section class="max-100vh mb-5 bg-primary " id="carousel">
				<div class="row h-100">
					
					<div class="col px-0">
						<div id="top-carousel" class=" carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#top-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#top-carousel" data-slide-to="1"></li>
								<li data-target="#top-carousel" data-slide-to="2"></li>
								<li data-target="#top-carousel" data-slide-to="3"></li>
								<li data-target="#top-carousel" data-slide-to="4"></li>
							</ol>
							<div class="carousel-inner ">
								<img src="./assets/imgs/bgs/bg-6-sm.jpg" class="slide-img absolute d-block w-100" alt="hospital">
								<div class="carousel-item active">
									<div class="slider-txts txt-shadow-1 absolute">
										<p class="h3 raleway">Manage Financial Records,<br> Reduce fraud and stealing in your hospital.</p>
										<!-- <img src="./assets/imgs/bgs/bg-6-sm.jpg" class="slide-img absolute d-block w-100" alt="hospital"> -->

										<button class="btn raleway green-btn px-4 mt-5 py-2 ">Get Started</button>
									</div>
								</div>
								<div class="carousel-item  ">
									<div class="slider-txts txt-shadow-1 ">
										<p class="h3 raleway">Take attendance of Workers <br> Improve accountability.</p>
										<button class="btn raleway green-btn px-4 mt-5 py-2 ">Get Started</button>
									</div>
									<!-- <img src="./assets/imgs/bgs/bg-6-sm.jpg" class="slide-img absolute  d-block w-100" alt="..."> -->
								</div>
								<div class="carousel-item  ">
									<div class="slider-txts txt-shadow-1 ">
										<p class="h3 raleway">Manage Patients<br> Get their data through a simple search.</p>
										<button class="btn raleway green-btn px-4 mt-5 py-2 ">Get Started</button>
									</div>
									<!-- <img src="./assets/imgs/bgs/bg-6-sm.jpg" class="slide-img absolute  d-block w-100" alt="..."> -->
								</div>
								<div class="carousel-item  ">
									<div class="slider-txts txt-shadow-1 ">
										<p class="h3 raleway">Reduce Paper,<br> Keep your data in an easily accessible database.</p>
										<button class="btn raleway green-btn px-4 mt-5 py-2 ">Get Started</button>
									</div>
									<!-- <img src="./assets/imgs/bgs/bg-6-sm.jpg" class="slide-img absolute  d-block w-100" alt="..."> -->
								</div>
								<div class="carousel-item  ">
									<div class="slider-txts txt-shadow-1 ">
										<p class="h3 raleway">Monitor key activities<br> See who does what and when.</p>
										<button class="btn raleway green-btn px-4 mt-5 py-2 ">Get Started</button>
									</div>
									<!-- <img src="./assets/imgs/bgs/bg-6-sm.jpg" class="slide-img absolute  d-block w-100" alt="..."> -->
								</div>
							</div>
							<a class="controls carousel-control-prev" href="#top-carousel" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="controls carousel-control-next" href="#top-carousel" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</section>
			
			<section class="container-fluid my-5 py-3" id="stores">
				<div class="py">
					<img id="mobile-life" src="./assets/imgs/svgs/mobile-life.svg" style="">
				</div>
			</section>
		</main>
		<?php require 'footer.php'; defaultFooter() ?>
		<?php require 'scripts.php';?>
	</body>
</html>