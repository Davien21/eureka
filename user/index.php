	<?php  require './backends/home-b.php'; ?>

	<?php 
		$request = $_SERVER['REQUEST_URI'];
		$request = substr($request, strrpos($request,'/'));
		if ($request === '/') {
			require 'user-menu.php'; user_menu('home','Home');
        	require __DIR__.'/views/first-login.php';
		}else if ($request === '/hospital-setup') {
			require 'user-menu.php'; user_menu('home','Hospital Setup');
	        require __DIR__.'/views/hospital-setup.php';
		}else if ($request === '/select-hospital-tools') {
			require 'user-menu.php'; user_menu('home','Select Hospital Tools');
	        require __DIR__.'/views/select-hospital-tools.php';
			
		}else {
	        header('Location:../404.php');

		}
	?>
			
		</section>
		<?php  require './user-scripts.php'; ?>
	</body>
</html>