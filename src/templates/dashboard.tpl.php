<?php
	include APPSRC.'/templates/partials/head.tpl.php';
?>

	<body>
		<header>
			<h1>Dashboard</h1>
			<hr>
		</header>
		<?php include APPSRC.'/templates/partials/nav.tpl.php'; ?>
		<main>
			<h2>Welcome, <?= $user->fullname;?>!</h2>
		</main>
		<footer>
			
		</footer>
	</body>
</html>