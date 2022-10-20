<?php
	// render template home
	require APPSRC.'/render.php';
	require APPSRC.'/db.php';

	$db = connectMysql($dsn, $dbuser, $dbpass);

	if (isset($_SESSION['user'])) {
		$user = $_SESSION['user'];
		$settings = fetchUserSettingsWithUserId($db, $user->id);

		echo render('home',[
			'user'=>$user,
			'usersettings'=>$settings
		]);
	} else {
		echo render('home');
	}
	
?>