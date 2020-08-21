
<?php 
	function fullMenu() {
?>
	<header class="full-nav">
		<nav  class="navbar navbar-expand-lg navbar-light paper-box-shadow flex-column">
			<div id="top-nav" class="w-100  ml-auto flex-column d-none d-lg-flex">
				<ul class="d-flex ml-auto mb-2" id="contacts-ul">
					<li class="nav-item px-2" title="Call our line">
						<a class="nav-link" href="tel:+2347012454621" >
							<img class="social-svg" src="./assets/imgs/svgs/call.svg">
							<span class="ml-2">+2347012454621</span>
						</a>
					</li>
					<li class=" social-svgs d-flex align-items-center">
						<a class="  col px-2" href="#" title="facebook">
							<img class="" src="./assets/imgs/svgs/facebook.svg">
						</a>
						<a class="  col px-2" 
							href="https://www.linkedin.com/in/chidiebere-ekennia-701443142/" 
							title="linkedIn">
							<img class="" src="./assets/imgs/svgs/linkedin.svg">
						</a>
						<a class="  col px-2" href="https://twitter.com/davien21" title="twitter">
							<img class="" src="./assets/imgs/svgs/twitter.svg">
						</a>
						<a class="  col pl-2 pr-0" href="#" title="instagram">
							<img class="" src="./assets/imgs/svgs/instagram.svg">
						</a>
					</li>
				</ul>
				<div class="d-flex w-100 justify-content-between bg-white no-trans" id="sticky-nav">
					<a class="navbar-brand " href="./index.php" title="Go to Home Page">
					<span class="green-txt">Eureka</span>
					<!-- <span class="">Pal</span> -->
				</a>
					<span class="d-lg-none nav-toggler" title="Toggle menu">
						<img class="menu-svg " src="./assets/imgs/svgs/menu.svg">
					</span>
					 
					<ul class=" bg-white d-flex " id="links-li">
						<li class="nav-item px-xl-2 active">
							<a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<!-- <li class="nav-item px-xl-2">
							<a class="nav-link" href="./features.php">Features</a>
						</li> -->
						<!-- <li class="nav-item px-xl-2">
							<a class="nav-link" href="./security.php">Security</a>
						</li> -->
						<!-- <li class="nav-item px-xl-2">
							<a class="nav-link" href="./about.php">About</a>
						</li> -->
						<li class="nav-item px-xl-2">
							<a class="nav-link" href="./support.php">Support</a>
						</li>
						<!-- <li class="nav-item mx-2">
							<a class="nav-link" href="./dashboard.php">Dashboard</a>
						</li> -->
						
					</ul>
					<ul class="d-flex">
						<li class=" mx-2 green-btn ml-xl-5">
							<a class="nav-link" href="./login.php">
								<span>Log in</span>
							</a>
						</li>
						<li class=" px-2 green-btn">
							<a class="nav-link " href="./signup.php">
								<span>Signup</span>
							</a>
						</li>
					</ul>
					 
				</div>
			</div>
			<div id="side-nav" class="d-flex d-lg-none w-100 sticky px-3 bg-white">
				<a class="navbar-brand upper-case" href="./index.php" title="Go to Home Page">
					<span class="green-txt">Eureka</span>
					<!-- <span class="">Pal</span> -->
				</a>
				<span class="d-lg-none nav-toggler ml-auto" title="Toggle menu">
					<img class="menu-svg " src="./assets/imgs/svgs/menu.svg">
				</span>
				<aside class="side-menu-overlay ">
					<div class="side-menu bg-white d-flex flex-column px-3 ">
						<div class="d-flex justify-content-between align-items-center">
							<a class="navbar-brand upper-case " href="./index.php" title="Go to Home Page">
								<span class="green-txt">Eureka</span>
								<!-- <span class="">Pal</span> -->
							</a>
							<span class="d-lg-none nav-toggler close-btn d-inline-block" title="Toggle menu">
								<img class="menu-svg " src="./assets/imgs/svgs/close.svg">
							</span>
						</div>
						<ul class=" bg-white mt-4" id="links-li">
							<li class="nav-item px-xl-2 active">
								<a class="nav-link px-0 mt-2 border-top" href="./index.php">
									Home 
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<!-- <li class="nav-item px-xl-2">
								<a class="nav-link px-0 mt-2 border-top" href="./features.php">Features</a>
							</li>
							<li class="nav-item px-xl-2">
								<a class="nav-link px-0 mt-2 border-top" href="./security.php">Security</a>
							</li>
							<li class="nav-item px-xl-2">
								<a class="nav-link px-0 mt-2 border-top" href="./about.php">About</a>
							</li> -->
							<li class="nav-item px-xl-2">
								<a class="nav-link px-0 mt-2 border-top" href="./support.php">Support</a>
							</li>
							<!-- <li class="nav-item ">
								<a class="nav-link px-0 mt-2 border-top" href="./dashboard.php">Dashboard</a>
							</li> -->
							
						</ul>
						<ul class="mt-3	">
							<li class="my-2 green-btn rounded">
								<a class="nav-link py-2 px-4 px-0 text-center" href="./login.php">
									<span>Log in</span>
								</a>
							</li>
							<li class="my-2 green-btn rounded">
								<a class="nav-link py-2 px-4 px-0 text-center " href="./signup.php">
									<span>Signup</span>
								</a>
							</li>
						</ul>
						<ul class=" mb-2" id="contacts-ul">
							 
							<li class="  mt-4" title="Call our line">
								<a class="nav-link flex" href="tel:+2347012454621" >
									<img class="social-svg" src="./assets/imgs/svgs/call.svg">
									<span class="ml-2">+2347012454621</span>
								</a>
							</li>
							<hr>
							<li class=" social-svgs d-flex align-items-center">
								<a class="  col" href="#" title="facebook">
									<img class="" src="./assets/imgs/svgs/facebook.svg">
								</a>
								<a class="  col" 
									href="https://www.linkedin.com/in/chidiebere-ekennia-701443142/" 
									title="linkedIn">
									<img class="" src="./assets/imgs/svgs/linkedin.svg">
								</a>
								<a class="  col" href="https://twitter.com/davien21" title="twitter">
									<img class="" src="./assets/imgs/svgs/twitter.svg">
								</a>
								<a class="  col" href="#" title="instagram">
									<img class="" src="./assets/imgs/svgs/instagram.svg">
								</a>
							</li>
						</ul>
					</div>
				</aside>
			</div>
		</nav>
	</header>
<?php 
	}
?>
<?php 
	function mobileMenu() {
?>
	<header class="">
		<nav  class="mobile-nav navbar navbar-expan navbar-light flex-column">
			<div id="side-nav" class="py-2 d-flex fixed-top w-100 px-3 bg-white paper-box-shadow">
				<a class="navbar-brand upper-case" href="./index.php" title="Go to Home Page">
					<span class="green-txt">Eureka</span>
					<!-- <span class="">Pal</span> -->
				</a>
				<span class="nav-toggler ml-auto" title="Toggle menu">
					<img class="menu-svg " src="./assets/imgs/svgs/menu.svg">
				</span>
				<aside class="side-menu-overlay ">
					<div class="side-menu bg-white d-flex flex-column px-3 ">
						<div class="d-flex justify-content-between align-items-center">
							<a class="navbar-brand upper-case " href="./index.php" title="Go to Home Page">
								<span class="green-txt">Eureka</span>
								<!-- <span class="">Pal</span> -->
							</a>
							<span class="nav-toggler close-btn d-inline-block" title="Toggle menu">
								<img class="menu-svg " src="./assets/imgs/svgs/close.svg">
							</span>
						</div>
						<ul class=" bg-white mt-4" id="links-li">
							<li class="nav-item px-xl-2 active">
								<a class="nav-link px-0 mt-2 border-top" href="./index.php">Home <span class="sr-only">(current)</span></a>
							</li>
						<!-- 	<li class="nav-item px-xl-2">
								<a class="nav-link px-0 mt-2 border-top" href="./features.php">Features</a>
							</li>
							<li class="nav-item px-xl-2">
								<a class="nav-link px-0 mt-2 border-top" href="./security.php">Security</a>
							</li>
							<li class="nav-item px-xl-2">
								<a class="nav-link px-0 mt-2 border-top" href="./about.php">About</a>
							</li> -->
							<li class="nav-item px-xl-2">
								<a class="nav-link px-0 mt-2 border-top" href="./support.php">Support</a>
							</li>
							<!-- <li class="nav-item ">
								<a class="nav-link px-0 mt-2 border-top" href="./dashboard.php">Dashboard</a>
							</li> -->
							
						</ul>
						<ul class="mt-3	">
							<li class="my-2  green-btn rounded">
								<a class="nav-link px-4 px-0 text-center" href="./login.php">
									Log in
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="my-2  green-btn rounded">
								<a class="nav-link px-4 px-0 text-center " href="./signup.php">
									Signup
								</a>
							</li>
						</ul>
						<ul class=" mb-2 fle" id="contacts-ul">
							 
							<li class="  mt-4" title="Call our line">
								<a class="nav-link flex" href="tel:+2347012454621" >
									<img class="social-svg" src="./assets/imgs/svgs/call.svg">
									<span class="ml-2">+2347012454621</span>
								</a>
							</li>
							<hr>
							<li class=" social-svgs d-flex align-items-center">
								<a class="  col" href="#" title="facebook">
									<img class="" src="./assets/imgs/svgs/facebook.svg">
								</a>
								<a class="  col" href="#" title="linkedIn">
									<img class="" src="./assets/imgs/svgs/linkedin.svg">
								</a>
								<a class="  col" href="#" title="twitter">
									<img class="" src="./assets/imgs/svgs/twitter.svg">
								</a>
								<a class="  col" href="#" title="instagram">
									<img class="" src="./assets/imgs/svgs/instagram.svg">
								</a>
							</li>
						</ul>
					</div>
				</aside>
			</div>
		</nav>
	</header>
<?php 
	}
?>

