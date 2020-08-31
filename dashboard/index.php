	<?php   
		require './controllers/index-b.php';
		$request = $_SERVER['REQUEST_URI'];
		$request = substr($request, strrpos($request,'/dashboard/'));
		$request = str_replace('/dashboard', '',$request);
		if ($request === '/') {
			require 'menu.php'; user_menu('home','Home');
			if(!$user['hospital_no']) require __DIR__."/views/first-login.php";
			require __DIR__."/views/home.php";
			return;
		}
		else if ($request === '/hospital-setup') {
			require 'menu.php'; user_menu('home','Hospital Setup');
	        require __DIR__.'/director/views/hospital-setup.php';
			return;

		}

		else if (preg_match('/^(\/hospital)\?[\w=&]+/', $request)) {
			$query = explode('?', $request);
			$params = explode('&', $query[1]);
			print_r($params);
			require 'menu.php'; user_menu('home',"Hospital Admin");
	        require __DIR__.'/director/views/home.php';
			return;

			
		}
		else if ($request === '/join-hospital') {

			require 'menu.php'; user_menu('home','Join Hospital');
	        require __DIR__.'/views/join-hospital.php';
			return;

			
		}
		else if ($request === '/getting-started') {
			require 'menu.php'; user_menu('home','Getting Started');
	        require __DIR__.'/views/getting-started.php';
			return;


		}
		else if ($request === '/logout') {
	        header('Location:../backends/logout.php');
			return;

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