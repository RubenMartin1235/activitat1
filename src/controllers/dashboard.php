<?php
	// render template home
	require APPSRC.'/render.php';

	if (isset($_SESSION['user'])) {
		echo render('dashboard',[
			'user'=>$_SESSION['user']
		]);
	} else {
		header('location:?url=home');
	}
	
?>