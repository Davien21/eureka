	<?php   
		require './backends/index-b.php';
		$request = $_SERVER['REQUEST_URI'];
		$request = substr($request, strrpos($request,'/'));
		if ($request === '/') {
			require 'user-menu.php'; user_menu('home','Home');
			if (!$progress) require __DIR__."/views/first-login.php";
		}
		else if ($request === '/hospital-setup') {
			require 'user-menu.php'; user_menu('home','Hospital Setup');
	        require __DIR__.'/director/views/hospital-setup.php';
		}
		else if ($request === '/select-hospital-tools') {

			require 'user-menu.php'; user_menu('home','Select Hospital Tools');
	        require __DIR__.'/director/views/select-hospital-tools.php';
			
		}
		else if ($request === '/join-hospital') {

			require 'user-menu.php'; user_menu('home','Join Hospital');
	        require __DIR__.'/views/join-hospital.php';
			
		}
		else if ($request === '/getting-started') {
			require 'user-menu.php'; user_menu('home','Getting Started');
	        require __DIR__.'/views/getting-started.php';

		}
		else if ($request === '/logout') {
	        header('Location:../backends/logout.php');
		}
		else {
			echo $request;
	        // header('Location:../404.php');

		}
	?>
			
		</section>
		<?php  require './user-scripts.php'; ?>
	</body>
</html>