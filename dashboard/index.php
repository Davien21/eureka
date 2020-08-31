	<?php   
		require './controllers/index-b.php';
		$request = $_SERVER['REQUEST_URI'];
		$request = substr($request, strrpos($request,'/dashboard/'));
		$request = str_replace('/dashboard', '',$request);
		if ($request === '/') {
			require 'menu.php'; user_menu('home','Home');
			if(!$user['hospital_no']) return require __DIR__."/views/first-login.php";
			return require __DIR__."/views/home.php";
			
		}
		else if ($request === '/hospital-setup') {
			require 'menu.php'; user_menu('home','Hospital Setup');
	        return require __DIR__.'/director/views/hospital-setup.php';
			
		}

		else if (preg_match('/^(\/hospital)\?[\w=&]+/', $request)) {
			$query = explode('?', $request);
			$params = explode('&', $query[1]);
			$hospital_user = explode('=',$params[1])[1];
			if ($hospital_user === 'director') return require __DIR__."./director-router.php"; 
			if ($hospital_user === 'staff') return require __DIR__."./staff-router.php"; 
			
		}
		else if ($request === '/join-hospital') {

			require 'menu.php'; user_menu('home','Join Hospital');
	        return require __DIR__.'/views/join-hospital.php';
			
		}
		else if ($request === '/getting-started') {
			require 'menu.php'; user_menu('home','Getting Started');
	        return require __DIR__.'/views/getting-started.php';
			


		}
		else if ($request === '/logout') {
	        return header('Location:../backends/logout.php');

		}
		else {
			echo $request;
	        // header('Location:../404.php');
			return;


		}
	?>
			
		</section>
		<?php  require './scripts.php'; ?>
	</body>
</html>