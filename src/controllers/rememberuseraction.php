<?php
	require APPSRC . '/db.php';

	$rememberMeAction = filter_input(INPUT_POST, 'rememberMeAction', FILTER_SANITIZE_STRING);

	if (isset($rememberMeAction)) {
		$rememberMe = boolval($rememberMeAction);
		if ($rememberMe) {
			$db = connectMysql($dsn, $dbuser, $dbpass);

			$email = $_COOKIE['rememberuser_email'];
			$passwd = $_COOKIE['rememberuser_passwd'];

			if ( ($user = authHashed($db,$email,$passwd)) <> new stdClass() ) {
				// desar sessió
				$_SESSION['user'] = $user;

				if (($rememberMe = $_REQUEST['rememberMe'])) {
					setcookie('rememberuser_email', $user->email, time()+(3600*24*365), '/');
					setcookie('rememberuser_passwd', $user->passwd, time()+(3600*24*365), '/');
				}
				
				// redirigir a dashboard
				header('location:?url=dashboard');
			} else {
				header('location:?url=home');
			}
		} else {
			unset($_COOKIE['rememberuser_email']);
			unset($_COOKIE['rememberuser_passwd']);
    		setcookie('rememberuser_email', null, -1, '/');
			setcookie('rememberuser_passwd', null, -1, '/');

			header('location:?url=login');
		}
	} else {
		header('location:?url=login');
	}
?>