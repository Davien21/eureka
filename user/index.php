	<?php  require './backends/home-b.php'; ?>

	<?php require 'user-menu.php'; user_menu('home','Home')?>

	<?php 
		
		$request = $_SERVER['REQUEST_URI'];
		echo $request;
		// echo __DIR__;
		// if ()
		switch ($request) {
		    case '/eureka/user/home.php' :
		        require './dash-views/first-login.php';
		        break;
		    case '/eureka/user/' :

		        require './dash-views/first-login.php';

		        break;
		    case '/eureka/user/hospital-setup' :
		        require './dash-views/hospital-setup.php';
		        break;
		    default:
		        http_response_code(404);
		        require '../404.php';
		        break;
		}
		// else if ()
	?>
			
		</main>
		<?php  require './user-scripts.php'; ?>
	</body>
</html>