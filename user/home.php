	<?php   
		require './backends/home-b.php';
		// echo __DIR__."<br>"; 
		// foreach ($_SERVER as $key => $value) {

		// 	echo "{$key} : {$value}<br>";
		// }
	?>

	<?php 
		$request = $_SERVER['REQUEST_URI'];
		$request = substr($request, strrpos($request,'/'));
		if ($request === '/') {
				echo $request;
			echo __DIR__;
			require 'user-menu.php'; user_menu('home','Home');
        	require __DIR__.'/views/first-login.php';
		}
		else if ($request === '/hospital-setup') {

			require 'user-menu.php'; user_menu('home','Hospital Setup');
	        require __DIR__.'/views/hospital-setup.php';
		}
		else if ($request === '/select-hospital-tools') {

			require 'user-menu.php'; user_menu('home','Select Hospital Tools');
	        require __DIR__.'/views/select-hospital-tools.php';
			
		}
		else if ($request === '/join-hospital') {

			require 'user-menu.php'; user_menu('home','Join Hospital');
	        require __DIR__.'/views/join-hospital.php';
			
		}
		else if ($request === '/logout') {

	        header('Location:../backends/logout.php');
		}
		else {
			echo $request;
			echo __DIR__;
	        // header('Location:../404.php');

		}
	?>
			
		</section>
		<?php  require './user-scripts.php'; ?>
	</body>
</html>