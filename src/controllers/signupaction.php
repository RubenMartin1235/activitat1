<?php
	require APPSRC . '/db.php';
	// Agafar $_REQUEST['email'] i $_REQUEST['passwd']

	// Comprovar si existeixen a la BD

	// Tenim dues possibilitats:
	// *	1. Existeix ==>		dashboard i obrim sessió usuari.
	// *	2. NO Existeix ==>	retornem a home o ens quedem a login.
	$db = connectMysql($dsn, $dbuser, $dbpass);

	if (
		!empty($_POST['fullname']) &&
		!empty($_POST['email']) &&
		!empty($_POST['passwd']) && !empty($_POST['passwdConfirm']) &&
		!empty($_POST['isProf'])
	) {
		if (
			isset($_POST['fullname']) &&
			isset($_POST['email']) &&
			isset($_POST['passwd']) && isset($_POST['passwdConfirm']) &&
			isset($_POST['isProf'])
		) {
			/*
			$fullname = $_REQUEST['fullname'];
			$email = $_REQUEST['email'];
			$passwd = $_REQUEST['passwd'];
			$passwdConfirm = $_REQUEST['passwdConfirm'];
			$isProf = $_REQUEST['isProf'];
			*/
			$fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);
			$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
			$passwd = filter_input(INPUT_POST, 'passwd', FILTER_SANITIZE_STRING);
			$passwdConfirm = filter_input(INPUT_POST, 'passwdConfirm', FILTER_SANITIZE_STRING);
			$isProf = filter_input(INPUT_POST, 'isProf', FILTER_SANITIZE_STRING);
			
			if (
				(
					$user = signupUser($db,
						$fullname,$email,
						$passwd,$passwdConfirm,
						$isProf
					)
				) <> new stdClass()
			) {
				// desar sessió
				$_SESSION['user'] = $user;
				
				// redirigir a dashboard
				header('location:?url=dashboard');
			} else {
				header('location:?url=signup');
			}
		} else {
			header('location:?url=signup');
		}
	} else {
		header('location:?url=signup');
	}
	
?>