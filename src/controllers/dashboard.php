<?php
	// render template home
	require APPSRC.'/render.php';

	echo render('dashboard',[
		'user'=>$_SESSION['user']
	]);
?>