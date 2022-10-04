<?php
	require APPSRC . '/db.php';
	require APPSRC . '/render.php';
	// Agafar $_REQUEST['email'] i $_REQUEST['passwd']

	// Comprovar si existeixen a la BD

	// Tenim dues possibilitats:
	// *	1. Existeix ==>		dashboard i obrim sessió usuari.
	// *	2. NO Existeix ==>	retornem a home o ens quedem a login.
	$db = connectMysql($dsn, $dbuser, $dbpass);

	if (!empty($_POST['email']) && !empty($_POST['passwd'])) {
		if (isset($_POST['email']) && isset($_POST['passwd'])) {
			$email = $_REQUEST['email'];
			$passwd = $_REQUEST['passwd'];
			if (auth($db,$email,$passwd)) {
				// desar sessió
				echo "ver";
				// redirigir a dashboard
			} else {
				echo render('login');
			}
		} else {
			echo render('login');
		}
	} else {
		echo render('login');
	}
	
?>