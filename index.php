<?php
	// iniciar sessió
	session_start();

	// definir directori aplicació
	define("APP",__DIR__);
	define("APPSRC",APP.'/src');

	// configuració entorn
	require APP.'/config.php';

	// carregar gestor de rutes
	require APPSRC.'/router.php';

	// enrutament
	$route_controller = getRoute($routes);

	require APPSRC."/controllers/" . $route_controller . '.php';

	// crida al controlador
?>
