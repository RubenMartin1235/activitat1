<?php
	// render template home
	require APPSRC.'/render.php';

	if (!isset($_SESSION['user'])) {
		echo render('signup');
	} else {
		echo render('dashboard');
	}
	
?>