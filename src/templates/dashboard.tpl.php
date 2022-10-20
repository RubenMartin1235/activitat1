<?php
	include APPSRC.'/templates/partials/head.tpl.php';
?>

	<body>
		<header>
			<h1>Dashboard</h1>
			<?php include APPSRC.'/templates/partials/user-profile-display.tpl.php'; ?>
		</header>
		<hr>
		<?php include APPSRC.'/templates/partials/nav.tpl.php'; ?>
		<div id="breadcrumbs">
			<ul>
				<li><a href="?url=home">Home</a></li>
				<li><a href="?url=dashboard">Dashboard</a></li>
			</ul>
		</div>
		<main>
			<h2>
				<?php
					switch ($usersettings->language) {
						case 'es':
							echo "¡Bienvenido"; break;
						case 'ca':
							echo "Benvingut"; break;
						default:
							echo "Welcome"; break;
					}
				?>, <?= $user->fullname;?>!
			</h2>
		</main>
		<footer>
			
		</footer>
	</body>
</html>