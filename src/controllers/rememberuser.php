<?php
	// render template home
	require APPSRC.'/render.php';

	require APPSRC.'/db.php';
	$db = connectMysql($dsn, $dbuser, $dbpass);

	$cookie_consent = filter_input(INPUT_COOKIE, 'cookie-consent', FILTER_SANITIZE_STRING);
	
	if (isset($cookie_consent) && ($cookie_consent == 'true')) {
		$email = filter_input(INPUT_COOKIE, 'rememberuser_email', FILTER_SANITIZE_STRING);

		$user = findUserByEmail($db, $email);
		if ($user <> new stdClass()) {
			$fullname = $user->fullname;
			echo render('rememberuser',[
				'fullname' => $fullname
			]);
		} else {
			header('location:?url=home');
		}
	} else {
		header('location:?url=home');
	}
?>