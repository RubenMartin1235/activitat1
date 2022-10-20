<?php
	// render template home
	require APPSRC.'/render.php';
	require APPSRC.'/db.php';

	$db = connectMysql($dsn, $dbuser, $dbpass);

	//var_dump($_SESSION['user']);
	if (isset($_SESSION['user'])) {
		$user = $_SESSION['user'];
		$settings = fetchUserSettingsWithUserId($db, $user->id);

		updateUserSettingsWithUserId($db,
			$user->id, $settings->lastLogin, $settings->lastLogout,
			$_REQUEST['language'], $_REQUEST['colorTheme']
		);

		header('location:?url=dashboard');
	} else {
		header('location:?url=home');
	}
	
?>