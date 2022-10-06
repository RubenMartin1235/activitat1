<?php
	// render template home
	require APPSRC.'/render.php';

	/* $titles = [
		'Superman',
		'Batman',
		'Hulk'
	];
	$title = $titles[rand()%count($titles)];

	$alumnes = [
		'Perico Palotes',
		'Aitor Tillas Frias',
		'Aitor Mentas Fuertes',
		'Jorge Nitales',
		'Elver Galarga',
		'Elsa Capunta'
	];

	echo render('home', [
		'title' => $title,
		'user' => 'maria',
		'alumnes' => $alumnes
	]); */
	
	echo render('home');
?>