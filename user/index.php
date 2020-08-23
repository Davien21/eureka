	<?php   
		// require './backends/home-b.php';
		// echo __DIR__."<br>"; 
		// foreach ($_SERVER as $key => $value) {

		// 	echo "{$key} : {$value}<br>";
		// }
	?>
	
	<?php 
		$request = $_SERVER['REQUEST_URI'];
			echo $request."<br>";
		// $request = substr($request, strrpos($request,'/'));
		if ($request === '/user/') {
			// echo __DIR__;
			require 'user-menu.php'; user_menu('home','Home');
        	require __DIR__.'/views/first-login.php';
		}
		else if ($request === '/user/hospital-setup') {
			echo "OKEKE";
			// require 'user-menu.php'; user_menu('home','Hospital Setup');
	        // require __DIR__.'/views/hospital-setup.php';
		}
		else if ($request === '/user/join-hospital') {

			require 'user-menu.php'; user_menu('home','Join Hospital');
	        require __DIR__.'/views/join-hospital.php';
			
		}
		else if ($request === '/user/select-hospital-tools') {

			require 'user-menu.php'; user_menu('home','Select Hospital Tools');
	        require __DIR__.'/views/select-hospital-tools.php';
			
		}
		else if ($request === '/user/logout') {

	        header('Location:../backends/logout.php');
		}
		else {
			echo $request;
			echo __DIR__;
	        header('Location:../404.php');

		}
	?>
			
		</section>
		<?php  require './user-scripts.php'; ?>
	</body>
</html>